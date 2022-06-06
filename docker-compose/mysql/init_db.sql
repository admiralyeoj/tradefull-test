DROP TABLE IF EXISTS `notes`;

CREATE TABLE notes (
  id int(11) NOT NULL,
  subject text NOT NULL,
  description text NOT NULL,
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  last_modified datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE notes
  ADD PRIMARY KEY (id);

ALTER TABLE notes
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO `notes` (subject, description) VALUES 
  ('Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis leo eu pellentesque tempor. Etiam at tellus vel nisi cursus pretium ut eu erat. Curabitur eleifend, sapien ac facilisis scelerisque, massa sem finibus sapien, sit amet lobortis turpis ipsum ac eros. Ut finibus laoreet nulla et efficitur. Sed erat leo, congue eget eros vel, auctor dictum neque. Praesent tempus condimentum dui, non vulputate arcu. Praesent arcu lectus, placerat at leo nec, posuere interdum nisl. Cras eu metus eu metus porttitor lobortis. Etiam eget vehicula dolor, non pretium est. Aenean faucibus ligula at tincidunt accumsan. Nulla rutrum sit amet mi non hendrerit. Aenean elementum congue augue id mattis. In interdum egestas placerat. Donec dictum ligula in metus tincidunt bibendum. Donec pellentesque enim tincidunt lorem sollicitudin, ac ultricies nulla egestas.'),
  ('Aliquam eget ullamcorper nisi', 'Aliquam eget ullamcorper nisi. Proin et pretium odio. Ut facilisis vestibulum magna, sagittis faucibus erat mollis pretium. Maecenas hendrerit, odio molestie molestie dictum, est dolor finibus sapien, ac tincidunt odio nisi a felis. Fusce porttitor, tellus id ultrices sagittis, quam ligula faucibus purus, eget fringilla purus dui eget diam. Nulla tellus nunc, mattis eu elit eget, posuere aliquet lectus. Etiam cursus erat sed sagittis semper. Integer imperdiet orci vitae velit placerat, vel elementum erat rhoncus. Nullam condimentum lorem ac feugiat lobortis. Fusce et ex mi. Maecenas sed sagittis nunc. Nulla euismod fermentum turpis, ut tempor dolor ornare a.'),
  ('Nullam rutrum nec sem quis elementum', 'Nullam rutrum nec sem quis elementum. Donec vitae congue nulla. Proin sed quam et ex tempor suscipit eget sagittis nisl. Sed vel magna vitae ante fringilla semper ac quis est. Donec molestie nunc non dolor mollis, a euismod sapien imperdiet. Sed nec tellus tortor. Sed tortor nulla, mattis id auctor vitae, vehicula et ante. Nunc eu mi in mi dignissim finibus. Suspendisse dapibus leo sit amet condimentum ultrices. In hac habitasse platea dictumst. Pellentesque nec porttitor tellus, sagittis varius magna. Quisque posuere molestie ligula finibus aliquam. Mauris sit amet metus tellus. Pellentesque vestibulum quam vitae urna viverra dignissim. Donec nisi diam, imperdiet ac erat in, dignissim tristique diam.'),
  ('Fusce nisl turpis, tincidunt ut lobortis vitae', 'Fusce nisl turpis, tincidunt ut lobortis vitae, dignissim sollicitudin odio. Aliquam erat volutpat. Vivamus et nibh dolor. In in vulputate orci. Vivamus ut mattis ipsum. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam a purus bibendum, porttitor ipsum at, tristique turpis. Sed lacinia dapibus nisl ac malesuada. Nam ut eros sit amet dui gravida dignissim. Donec et neque sed ex pellentesque gravida. Nullam pretium sapien id erat condimentum lacinia. Quisque placerat ultricies lacus, vel pretium lorem. Donec pharetra vulputate ex non elementum. Nullam volutpat eu metus eu suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
  ('Nulla tempor elit ut risus sollicitudin', 'Nulla tempor elit ut risus sollicitudin, at sagittis mauris placerat. Nulla finibus facilisis massa eu fringilla. Aliquam egestas a ante ac aliquet. Sed vitae orci auctor, commodo mauris ut, vestibulum nibh. In hac habitasse platea dictumst. Quisque ut arcu semper, finibus sapien nec, faucibus enim. Donec ullamcorper nunc quis eleifend pulvinar. In sed arcu sit amet leo tincidunt aliquam nec vel odio. Phasellus ac ex gravida, placerat nisl at, interdum lacus. Aliquam semper, augue ac scelerisque blandit, nisi velit euismod metus, sed hendrerit ipsum diam eget erat.');