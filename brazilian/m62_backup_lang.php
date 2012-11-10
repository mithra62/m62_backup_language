<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * mithra62 - Backup Pro
 *
 * @package		mithra62:m62_backup
 * @author		Eric Lamb
 * @copyright	Copyright (c) 2011, mithra62, Eric Lamb.
 * @link		http://mithra62.com/projects/view/backup-pro/
 * @version		1.8.2
 * @filesource 	./system/expressionengine/third_party/m62_backup/
 */

/**
 * Language Array
 * ExpressionEngine language translation array
 * @var array
 */
$lang = array(

// Necessário para a página MÓDULOS

'm62_backup_module_name'		=> 'Backup Pro',
'm62_backup_module_description'	=> 'Interface para criar backups do banco de dados e dos arquivos do seu site. ',

//----------------------------------------

// Additional Key => Value pairs go here

// END

'index' => 'Ver Backups',
'no_backups' => 'Nenhum Backup',
'backups' => 'Backups',
'database_backups' => 'Backups do Banco de Dados',
'backup_db' => 'Backup do Banco de Dados',
'db_backup_created' => 'Backup do Banco de Dados Criado',
'file_backup_created' => 'Backup dos Arquivos Criado',
'database_backups' => 'Backups do Banco de Dados',
'file_name' => 'Nome do Arquivo',
'backup_files' => 'Arquivos de Backup',
'file_backups' => 'Backups de Arquivo',
'delete_selected' => 'Excluir Selecionado',
'delete_backup' => 'Excluir Backups',
'action' => 'Ação',
'download' => 'Download',
'restore' => 'Restaurar',
'date_taken' => 'Data da Captura',
'db_backup_not_found' => 'Não foi localizado um Download do Banco de Dados',
'file_size' => 'Tamanho do Arquivo',
'file_backup_failure' => 'Não foi posível criar o Arquivo de Backup',
'db_backup_failure' => 'Não foi possível criar backup do Banco de Dados',
'backups_not_found' => 'Backup Não-Localizado',
'delete_backup_confirm' => 'Tem certeza que deseja remover os backups abaixo?',
'restore_db_question' => 'Tem certeza que deseja restaurar o banco de dados abaixo?',
'database_restored' => 'Banco de Dados Restaurado!',
'files' => 'Arquivos',

'settings' => 'Configurações',
'backup_file_location' => 'Local do Arquivo de Backup',
'backup_file_locations' => 'Locais do Arquivo de Backup',
'backup_file_location_instructions' => 'Apenas insira; o que você deseja incluir no backup de arquivo? Insira o caminho completo, umm por linha que você deseja efetuar o backup.',
'backup_store_location' => 'Local do Armazenamento de Backup',
'backup_store_location_instructions' => 'Onde você deseja armazenar seus backups? O ideal seria que isto não ficasse na pasta raiz do seu site (por segurança) mas se isto acontecer, não será incluído no backup do arquivo. Lembre de deixar esta pasta com permissões de escrita no seu servidor, então dê um chmod nela para 0666 ou 0777.',
'license_number' => 'Número da Licença',
'configure_backups' => 'Configurações de Backup',
'configure_cron' => 'Configure Cron',
'enable_cron' => 'Ativar Cron',
'cron_control' => 'Controle de Cron',
'cron_notify_emails' => 'E-mails de Aviso',
'cron_notify_emails_instructions' => 'Insira um endereço de e-mail por linha, para ser avisado assim que o backup  estiver completado. Se nenhuma endereço de e-mail estiver configurado, nenhum aviso será enviado. Endereços de e-mail inválidos serão ignorados.',
'cron_attach_backups' => 'Anexar Backups no Email',
'cron_attach_backups_instructions' => 'Por padrão, o Backup Pro irá enviar um link para download na mensagem de e-mail mas se você  gostaria de ter arquivos de backup enviados como anexos juntamente com os avisos de e-mail, nós podemos fazer isso, também. ',
'cron_attach_threshold' => 'Tamanho Máximo dos Anexos',
'cron_attach_threshold_instructions' => 'Dependo do tamanho do seu site, os backups podem ser gigantescos. Algumas vezes, isso pode ser demais para seu servidor de e-mails. Se o tamanho do anexo em bytes for maior que o valor aqui, os backups não serão anexados e ao invés disso, será enviada uma mensagem apenas com os links para download. ',
'auto_threshold_instructions' => 'Por outro lado, a quantidade de espaço utilizado pelo Backup Pro pode ser considerável. Para manter as coisas viáveis, o Backup Pro pode analisar o espaço utilizado e responder de acordo para remover os backups antigos e deixar espaço para os backups mais novos. Tenha certeza que a quantidade máxima inserida neste campo está em bytes. Se for definido como 0, nenhuma atitude será tomada.',
'auto_threshold' => 'Tarefa de Auto-Limpeza',
'allowed_access_levels' => 'Níveis de Acesso Permitidos',
'allowed_access_levels_instructions' => 'Backup Pro inicialmente só terá seu acesso garantido para os Super Administradores, nesta configuração você define quem pode acessar o módulo, assim, se você precisar que outros grupos acessem o Backup, selecione-os a partir da lista.',
'settings_updated' => 'Configurações Atualizadas',
'settings_update_fail' => 'Não foi possível atualizar as configurações',

'cron_command_instructions' => 'Use os comandos abaixo para o seu CRON baseado no tipo de backup que você gostaria de automatizar. ',
'cron_notification' => 'Avisos de Cron do Backup Pro',
'cron_control_instructions' => 'Para ter certeza que as requisições para a funcionalidade do cron estão seguras, você terá que incluir um parâmetro de query randômico para cada solicitação. Inicialmente o Backup Pro cria isto para você, mas se você gostaria de alterar isto, faça-o aqui',
'exclude_paths' => 'Excluir Caminhos',
'exclude_paths_instructions' => 'Por padrão, o Backup Pro irá efetuar o backup de tudo que estiver no seu site a partior da pasta root, mas para alguns sites, isto não funcionará. Se você deseja excluir alguma coisa do backup, insira o caminho completo do documento ou do arquivo aqui, um por linha. ',

'files_dir_not_writable' => 'A pasta dos arquivos de backup não possuem permissão de escrita. Tenha certeza que as permissões para "#files_dir#" estão definidas para 0666 ou 0777.',
'files_dir_missing' => 'A pasta dos arquivos de backup não foi localizada. Tenha certeza que a pasta "#files_dir#" existe e que ela possui permissões de escrita.',
'db_dir_not_writable' => 'A pasta de backup do banco de dados não possui permissão de escrita. Tenha certeza que as permissões para "#db_dir#" estão definidas para 0666 ou 0777.',
'db_dir_missing' => 'A pasta de backup do banco de dados não foi localizada. Tenha certeza que a pasta "#db_dir#" existe e que a mesma possui permissões de escrita.',
'database' => 'Banco de dDdos',
'type' => 'Tipo',
'restore_db' => 'Restaurar Banco de Dados',
'backups_deleted' => 'Backups Excluídos',
'back_dir_not_writable' => 'A pasta de backup não possui permissão de escrita!',
'module_instructions' => 'O Backup Pro é um avançado módulo de gerebciamento de backup que permitem aos administradores a habilidade para 
						  efetuar o backup e o restore do banco de dados do seu site, assim como efetuar o backup do todo o sistema de arquivos. Ambos 
						  backups de arquivos e banco de dados são comprimidos para economizar espaço e permanecer disponíveis para download. <br /><br />
						  Para efetuar um backup, simplesmente clique no botão do tipo de backup que você gostaria de efetuar. Assim que o backup estiver 
						  completado, você poderá baixá-lo a partir da lista abaixo. Se você gostaria de restaurar seu banco de dados, apenas clique no botão "restaurar" 
						  na lista de backups do banco de dados. Note que efetuar o backup dos seus arquivos pode levar o tempo de vários minutos para ser executado. ',


'cron_message' => '
Olá,

Seu backup foi efetuado com sucesso.

Backup Pro',
'cron_txt_message' => '',

'file_backup' => 'Backup de Arquivos',
'db_backup' => 'Backup do Banco de Dados',
'combined' => 'Backup Combinado (arquivos e banco de dados no mesmo processo)',

'missing_license_number' => 'Por favor insira o número da sua licença. <a href="#config_url#">Insira sua Licença</a>',

'configure_ftp' => 'Configurar Sincronia FTP',
'ftp_hostname' => 'Host FTP',
'ftp_hostname_instructions' => 'O endereço ou o domínio para o servidor remoto. Não inclua nenhum prefixo como http:// ou ftp://',
'ftp_username' => 'Usuário FTP',
'ftp_username_instructions' => 'Se você não sabe o que é isto aqui, existe uma boa chance de precisar falar com seu host para ter a sincronia FTP ativada e sendo executada. ',
'ftp_password' => 'Senha FTP',
'ftp_password_instructions' => 'A senha será encriptada por segurança antes do armazenamento.',
'ftp_port' => 'Porta FTP',
'ftp_port_instructions' => 'A padrão é a 21 mas se seu host usa uma porta diferente para FTP, atualize-a aqui.',
'ftp_passive' => 'Modo Passivo',
'ftp_passive_instructions' => 'Se marcado, então todas as trasferências serão efetuadas utilizando o método PASV. ',
'ftp_store_location' => 'Local de Armazenamento FTP',
'ftp_store_location_instructions' => 'Onde no servidor remoto você irá armazenar seus backups backups. Esta pasta tem que existir lá no servidor antes que estas configurações sejam salvas aqui.',
'ftp_directory_missing' => 'A pasta não existe no servidor de FTP remoto.',

'configure_s3' => 'Configurar sincronia com Amazon S3',
's3_access_key' => 'ID de Chave de Acesso',
's3_access_key_instructions' => 'Sua Chave de Acesso identifica você como o responsável plas suas solicitações de serviço S3. Você pode encontrar isto ao assinar em sua <a href="http://aws.amazon.com" target="_blank">Conta Amazon Web Services</a>',
's3_secret_key' => 'Chave de Acesso Secreta',
's3_secret_key_instructions' => 'Esta chave é apenas uma longa string de caracteres (e não um arquivos) que você usa para calcular a assinatura digital que você incluiu na sua solicitação. Para segurança, ambas suas chaves de Acesso e chave Secreta são encriptadas antes do armazenamento.',
's3_bucket' => 'Nome do Bucket',
's3_bucket_instructions' => 'Esta é basicamente o nome da sua pasta master onde seus backups serão armazenados. Se não existirem, ela será criada. Se você não inserir um nome para seu bucket, um será criado para você.',


'configure_cf' => 'Configure os Arquivos de Cloud Rackspace',
'cf_username' => 'Nome de Usuário Rackspace',
'cf_username_instructions' => 'Use seu nome de usuário Cloud Rackspace como o nome de usuário para a API. Por segurança, suas chaves de Acesso e chaves Secretas são encriptadas antes do armazenamento.',
'cf_api' => 'Chave de acesso da API',
'cf_api_instructions' => 'Obtenha sua chave de acesso API a partir do Painel de Controle da Cloud Rackspace em <a href="https://manage.rackspacecloud.com/APIAccess.do" target="_blank">Sua conta</a>. Por segurança, ambas chaves de Acesso e Chave Secreta estão encriptadas antes do armazenamento.',
'cf_bucket' => 'Nome do Bucket',
'cf_bucket_instructions' => 'Esta é basicamente o nome da sua pasta-mestre onde seus backups serão armazenados. Se eles não existirem, então eles serão criados. Se você não inserir um nome para um bucket, eles serão criados para você.',
'cf_connect_fail' => 'As credenciais de Arquivos Cloud Rackspace não estão corretas.',
'cf_location' => 'Local da Conta',
'cf_location_instructions' => 'Você pode determinar o local para uso baseado no site de revenda Rackspace que foi usado para criar sua conta. <a href="http://www.rackspacecloud.com">US</a> ou <a href="http://www.rackspace.co.uk">UK</a>.',

'cf_location_types' => array('us' => 'US', 'uk' => 'UK'),
'log_database_backup' => 'Backup do Banco de Dados efetuado.',
'log_file_backup' => 'Backup dos Arquivos efetuado.',
'log_backup_downloaded' => 'Backup baixado.',
'log_backup_deleted' => 'Backups excluídos.',
'log_settings_updated' => 'Configurações do Backup Pro atualizadas',

'backup_in_progress_instructions' => '<strong>NÃO FAÇA NENHUMA DESSAS COISAS ATÉ QUE SEU BACKUP ESTEJA PRONTO:</strong><br />
    1. NÃO feche seu navegador<br />
    2. NÃO recarregue este página<br />
    3. NÃO navegue a partir desta página<br />
',
'backup_in_progress' => 'Backup sendo executado...',
'backup_progress_bar_start' => 'Backup sendo iniciado...',
'backup_progress_bar_table_start' => 'Iniciando backup da tabela: ',
'backup_progress_bar_table_stop' => 'Backup completado da tabela: ',
'backup_progress_bar_database_stop' => 'Backup do Banco de Dados Completado.',
'backup_progress_bar_start_file_exclude' => 'Iniciando lista de exclusão de arquivos...',
'backup_progress_bar_stop_file_exclude' => 'Completada lista de exclusão de arquivos...',
'backup_progress_bar_start_file_list' => 'Iniciando lista de geração de arquivos...',
'backup_progress_bar_stop_file_list' => 'Lista de geração de arquivos completada...',
'backup_progress_bar_create_archive' => 'Criando o arquivo...',
'backup_progress_bar_start_s3' => 'Iniciando transferência para S3 (isto pode levar um minuto)...',
'backup_progress_bar_stop_s3' => 'Transferência completada para S3...',
'backup_progress_bar_start_ftp' => 'Iniciando a transferência FTP para um servidor remoto (isto pode levar um minuto)...',
'backup_progress_bar_stop_ftp' => 'Completada a Transferência FTP para o servidor remoto',
'backup_progress_bar_start_cf' => 'Iniciando a Transferência para um servidor Rackspace Cloud (isto pode levar um minuto)...',
'backup_progress_bar_stop_cf' => 'Transferência para o Rackspace Cloud finalizada...',


'backup_progress_bar_stop' => 'Backup Completado!',

'max_db_backups' => 'Quantidade Máxima de Backups do Banco de Dados',
'max_db_backups_instructions' => 'Insira o número máximo de backups do banco de dados que você deseja armazenar localmente. Note que apenas backups locais (remoto e local) serão removidos. Insira 0 para desativar.',
'max_file_backups' => 'Quantidade Máxima de Backups de Arquivos',
'max_file_backups_instructions' => 'Insira a quantidade máxima de backups de arquivos que você deseja armazenar localmente. Note que apenas backups locais (remoto e local) serão removidos. Insira 0 para desativar.',

'date_format' => 'Formato da Data',
'date_format_instructions' => 'O formato da data que você deseja que o Backup Pro use ao mostrar seus backups. Note que o formato deve estar em conformidade com os formatos de data padrão.',

'taken_on' => 'Obtido em',
'size' => 'Tamanho',
''=>''
);