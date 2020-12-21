TYPE=VIEW
query=select `helpdesk`.`tickets`.`id_ticket` AS `id_ticket`,`helpdesk`.`tasks`.`title_task` AS `title_task`,`helpdesk`.`monitoring`.`status_component` AS `status_component`,`helpdesk`.`actions`.`id_task` AS `id_task` from ((((((((`helpdesk`.`tickets` join `helpdesk`.`tasks` on((`helpdesk`.`tickets`.`id_ticket` = `helpdesk`.`tasks`.`id_task`))) join `helpdesk`.`monitoring` on((`helpdesk`.`tickets`.`status` = `helpdesk`.`monitoring`.`status_ticket`))) join `helpdesk`.`components` on((`helpdesk`.`monitoring`.`id_component` = `helpdesk`.`components`.`id_component`))) join `helpdesk`.`employee` on((`helpdesk`.`employee`.`id_employee` = `helpdesk`.`tasks`.`id_employee`))) join `helpdesk`.`it_spec` on((`helpdesk`.`employee`.`character` = `helpdesk`.`it_spec`.`character`))) join `helpdesk`.`users` on((`helpdesk`.`employee`.`name` = `helpdesk`.`users`.`name`))) join `helpdesk`.`actions` on((`helpdesk`.`tasks`.`id_task` = `helpdesk`.`actions`.`id_task`))) join `helpdesk`.`template_tickets` on((`helpdesk`.`users`.`email` = `helpdesk`.`template_tickets`.`letter_subject`)))
md5=c872ad318470fa603ccd50727bc75634
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2020-12-21 07:07:33
create-version=1
source=SELECT
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `helpdesk`.`tickets`.`id_ticket` AS `id_ticket`,`helpdesk`.`tasks`.`title_task` AS `title_task`,`helpdesk`.`monitoring`.`status_component` AS `status_component`,`helpdesk`.`actions`.`id_task` AS `id_task` from ((((((((`helpdesk`.`tickets` join `helpdesk`.`tasks` on((`helpdesk`.`tickets`.`id_ticket` = `helpdesk`.`tasks`.`id_task`))) join `helpdesk`.`monitoring` on((`helpdesk`.`tickets`.`status` = `helpdesk`.`monitoring`.`status_ticket`))) join `helpdesk`.`components` on((`helpdesk`.`monitoring`.`id_component` = `helpdesk`.`components`.`id_component`))) join `helpdesk`.`employee` on((`helpdesk`.`employee`.`id_employee` = `helpdesk`.`tasks`.`id_employee`))) join `helpdesk`.`it_spec` on((`helpdesk`.`employee`.`character` = `helpdesk`.`it_spec`.`character`))) join `helpdesk`.`users` on((`helpdesk`.`employee`.`name` = `helpdesk`.`users`.`name`))) join `helpdesk`.`actions` on((`helpdesk`.`tasks`.`id_task` = `helpdesk`.`actions`.`id_task`))) join `helpdesk`.`template_tickets` on((`helpdesk`.`users`.`email` = `helpdesk`.`template_tickets`.`letter_subject`)))