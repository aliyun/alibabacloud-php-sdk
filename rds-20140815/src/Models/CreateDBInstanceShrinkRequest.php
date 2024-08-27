<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDBInstanceShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceShrinkRequest extends Model
{
    /**
     * @description The number of ApsaraDB RDS for MySQL instances that you want to create. The parameter takes effect only when you create multiple ApsaraDB RDS for MySQL instances at a time by using a single request.
     *
     * Valid values: **1** to **20**. Default value: **1**.
     *
     * > *   If you want to create multiple ApsaraDB RDS for MySQL instances at a time by using a single request, you can add tags to all the instances by using the **Tag.Key** parameter and the **Tag.Value** parameter. After the instances are created, you can manage the instances based on the tags.
     * > *   After you submit a request to create multiple ApsaraDB RDS for MySQL instances, this operation returns **TaskId**, **RequestId**, and **Message**. You can call the DescribeDBInstanceAttribute operation to query the information about an instance.
     * > *   If the value of the **Engine** parameter is not **MySQL** and the value of the Amount parameter is greater than **1**, this operation fails and returns an error code `InvalidParam.Engine`.
     * @example 2
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to automatically create a proxy. Valid values:
     *
     *   **true**: automatically creates a proxy. By default, general-purpose proxies are enabled.
     *   **false**: does not automatically create a proxy.
     *
     * @example false
     *
     * @var bool
     */
    public $autoCreateProxy;

    /**
     * @description Specifies whether to enable the automatic payment feature. Valid values:
     *
     *   **true**: enables the feature. Make sure that your account balance is sufficient.
     *   **false**: disables the feature. An unpaid order is generated.
     *
     * >  The default value is true. If your account balance is insufficient, you can set the AutoPay parameter to false to generate an unpaid order. Then, you can log on to the ApsaraDB RDS console to complete the payment.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the instance. You must specify this parameter only if the instance uses the subscription billing method. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > *   The auto-renewal cycle is one month for a monthly subscription.
     * > *   The auto-renewal cycle is one year for a yearly subscription.
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The configuration of the Babelfish feature for the instance that runs PostgreSQL.
     *
     * The following list describes the fields in the format:
     *
     *   **babelfishEnabled**: specifies whether to enable Babelfish for the instance. If you set this field to **true**, you enable Babelfish for the instance. If you leave this parameter empty, Babelfish is disabled for the instance.
     *   **migrationMode**: The migration mode of the instance. Valid values: **single-db** and **multi-db**.
     *   **masterUsername**: The username of the administrator account. The username can contain lowercase letters, digits, and underscores (_). It must start with a letter and end with a letter or digit. It can be up to 63 characters in length and cannot start with pg.
     *   **masterUserPassword**: The password of the administrator account. The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. It must be 8 to 32 characters in length. The password can contain any of the following characters: `! @ # $ % ^ & * ( ) _ + - =`.
     *
     * > This parameter applies only to ApsaraDB RDS for PostgreSQL instances. For more information about Babelfish for ApsaraDB RDS for PostgreSQL, see [Introduction to Babelfish](https://help.aliyun.com/document_detail/428613.html).
     * @example {"babelfishEnabled":"true","migrationMode":"single-db","masterUsername":"babelfish_user","masterUserPassword":"Babelfish123!"}
     *
     * @var string
     */
    public $babelfishConfig;

    /**
     * @description A deprecated parameter. You do not need to specify this parameter.
     *
     * @example false
     *
     * @var string
     */
    public $bpeEnabled;

    /**
     * @description Specifies whether to enable the I/O burst feature of general ESSDs. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  For more information about the I/O burst feature of general ESSDs, see [What are general ESSDs?](https://help.aliyun.com/document_detail/2340501.html)
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The additional business information about the instance.
     *
     * @example 121436975448952
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   Regular RDS instance
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **cluster**: RDS Cluster Edition for ApsaraDB RDS for MySQL or PostgreSQL
     *   **AlwaysOn**: RDS Cluster Edition for ApsaraDB RDS for SQL Server
     *   **Finance**: RDS Basic Edition for serverless instances
     *
     *   Serverless instance
     *
     *   **serverless_basic**: RDS Basic Edition for serverless instances. This edition is available only for instances that run MySQL and PostgreSQL.
     *   **serverless_standard**: RDS High-availability Edition for serverless instances. This edition is available only for instances that run MySQL and PostgreSQL.
     *   **serverless_ha**: RDS High-availability Edition for serverless instances. This edition is available only for instances that run SQL Server.
     *
     **
     *
     **Note** This parameter is required when you create a serverless instance.
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable the data archiving feature of general ESSDs. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  For more information about the data archiving feature of general ESSDs, see [Use the data archiving feature of general ESSDs](https://help.aliyun.com/document_detail/2701832.html).
     * @example false
     *
     * @var bool
     */
    public $coldDataEnabled;

    /**
     * @description The connection mode of the instance. Valid values:
     *
     *   **Standard**: standard mode
     *   **Safe**: database proxy mode
     *
     * > SQL Server 2012, SQL Server 2016, and SQL Server 2017 support only the standard mode.
     * @example Standard
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The internal endpoint that is used to connect to the instance.
     *
     * @example rm-uf6wjk5*****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The policy based on which multiple instances are created. The parameter takes effect only when the value of the **Amount** parameter is greater than 1. Valid values:
     *
     *   **Atomicity** (default): atomicity. The instances are all created together. If one instance cannot be created, none of the instances are created.
     *   **Partial**: non-atomicity. Each instance is independently created. The failure in creating an instance does not affect the creation of the other instances.
     *
     * @example Atomicity
     *
     * @var string
     */
    public $createStrategy;

    /**
     * @description The instance type of the instance. You can specify an instance type of the standard or YiTian product type. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * To create a serverless instance, set this parameter to one of the following values:
     *
     *   If you want to create a serverless instance that runs MySQL on RDS Basic Edition, set this parameter to **mysql.n2.serverless.1c**.
     *   If you want to create a serverless instance that runs MySQL on RDS High-availability Edition, set this parameter to **mysql.n2.serverless.2c**.
     *   If you want to create a serverless instance that runs SQL Server, set this parameter to **mssql.mem2.serverless.s2**.
     *   If you want to create a serverless instance that runs PostgreSQL on RDS Basic Edition, set this parameter to **pg.n2.serverless.1c**.
     *   If you want to create a serverless instance that runs PostgreSQL on RDS High-availability Edition, set this parameter to **pg.n2.serverless.2c**.
     *
     * This parameter is required.
     * @example rds.mysql.s1.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance name. The name must be 2 to 255 characters in length and can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter.
     *
     * > The name cannot start with http:// or https://.
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The network connection type of the instance. The value of this parameter is fixed as **Intranet**, indicating an internal network connection.
     *
     * This parameter is required.
     * @example Internet
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The storage capacity of the instance. Unit: GB. The storage capacity increases in increments of 5 GB. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd**: local SSD. This is the recommended storage type.
     *   **general_essd**: general Enterprise SSD (ESSD). This is the recommended storage type.
     *   **cloud_essd**: PL1 ESSD
     *   **cloud_essd2**: PL2 ESSD
     *   **cloud_essd3**: PL3 ESSD
     *   **cloud_ssd**: standard SSD. This storage type is not recommended. Standard SSDs are no longer available for purchase in some Alibaba Cloud regions.
     *
     * The default value of this parameter is determined by the instance type specified by the **DBInstanceClass** parameter.
     *
     *   If the instance type specifies the local SSD storage type, the default value of this parameter is **local_ssd**.
     *   If the instance type specifies the standard SSD or ESSD storage type, the default value of this parameter is **cloud_essd**.
     *
     * >  Serverless instances support only PL1 ESSDs and general ESSDs.
     * @example cloud_essd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description Specifies whether the table name is case-sensitive. Valid values:
     *
     *   **true**: Table names are not case-sensitive. This is the default value.
     *   **false**: Table names are case-sensitive.
     *
     * @example true
     *
     * @var string
     */
    public $DBIsIgnoreCase;

    /**
     * @description The parameter template ID. You can call the DescribeParameterGroups operation to query the parameter template ID.
     *
     * >  This parameter is available if you want to create an instance that runs MySQL or PostgreSQL. If you do not configure this parameter, the default parameter template is used. If you want to use a custom parameter template, you can customize a parameter template and set this parameter to the ID of the custom template.
     * @example rpg-sys-*****
     *
     * @var string
     */
    public $DBParamGroupId;

    /**
     * @description The time zone of the instance. This parameter takes effect only when you set the **Engine** parameter to **MySQL** or **PostgreSQL**.
     *
     *   If you set **Engine** to **MySQL**:
     *
     *   The time zone of the instance is in UTC. Valid values: **-12:59** to **+13:00**.
     *   If the instance uses local SSDs, you can specify the name of the time zone. Example: Asia/Hong_Kong. For more information, see [Time zones](https://help.aliyun.com/document_detail/297356.html).
     *
     *   If you set **Engine** to **PostgreSQL**:
     *
     *   The time zone of the instance is not in UTC. For more information, see [Time zones](https://help.aliyun.com/document_detail/297356.html).
     *   You can specify this parameter only when the instance runs PostgreSQL with standard SSDs or ESSDs.
     *
     * > *   You can specify the time zone when you create a primary instance. You cannot specify the time zone when you create a read-only instance. Read-only instances inherit the time zone of their primary instance.
     * > *   If you do not specify this parameter, the system automatically assigns the default time zone of the region in which the instance resides.
     * @example +08:00
     *
     * @var string
     */
    public $DBTimeZone;

    /**
     * @description The ID of the dedicated cluster to which the instance belongs.
     *
     * If you create the instance in a dedicated cluster, you must specify this parameter.
     *
     *   You can call the DescribeDedicatedHostGroups operation to query the information about the dedicated cluster.
     *   If no dedicated clusters are created, you can call the CreateDedicatedHostGroup operation to create a dedicated cluster.
     *
     * @example dhg-4n*****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description Specifies whether to enable the release protection feature for the instance. This feature is available only for pay-as-you-go instances. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run but does not create the instance. The system checks items such as the request parameters, request format, service limits, and available resources.
     *   **false** (default): performs a dry run and sends the request. If the request passes the dry run, the instance is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the key that is used for cloud disk encryption in the region in which the instance is deployed. If this parameter is specified, cloud disk encryption is enabled and you must also specify the **RoleARN** parameter. Cloud disk encryption cannot be disabled after it is enabled.
     *
     * You can obtain the ID of the key in the Key Management Service (KMS) console or create a key. For more information, see [Create a key](https://help.aliyun.com/document_detail/181610.html).
     *
     * > *   This parameter is not required when you create an instance that runs MySQL, PostgreSQL, or SQL Server. You need to only specify the **RoleARN** parameter to create an instance that has cloud disk encryption enabled by using the obtained key ID.
     * > *   You can configure RAM authorization to require a RAM user to enable cloud disk encryption when the RAM user is used to create an instance. If cloud disk encryption is disabled during the instance creation, the creation operation fails. To complete the configuration, you can attach the following policy to the RAM user: `{"Version":"1","Statement":[{"Effect":"Deny","Action":"rds:CreateDBInstance","Resource":"*","Condition":{"StringEquals":{"rds:DiskEncryptionRequired":"false"}}}]}`
     *
     *
     * >Warning: The configuration also affects the CreateOrder operation that is called to create instances in the console.
     * @example 0d24*****-da7b-4786-b981-9a164dxxxxxx
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *   **MariaDB**
     *
     * This parameter is required.
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance. Valid values:
     *
     *   Regular instance
     *
     *   Valid values when you set Engine to MySQL: **5.5**, **5.6**, **5.7**, and **8.0**
     *   Valid values when you set Engine to SQLServer: **08r2_ent_ha** (cloud disks, discontinued), **2008r2** (local disks, discontinued), **2012** (SQL Server EE Basic), **2012_ent_ha**, **2012_std_ha**, **2012_web**, **2014_ent_ha**, **2014_std_ha**, **2016_ent_ha**, **2016_std_ha**, **2016_web**, **2017_ent**, **2017_std_ha**, **2017_web**, **2019_ent**, **2019_std_ha**, **2019_web**, **2022_ent**, **2022_std_ha**, and **2022_web**
     *   Valid values when you set Engine to PostgreSQL: **10.0**, **11.0**, **12.0**, **13.0**, **14.0**, **15.0**, and **16.0**
     *   Valid value if you set Engine to MariaDB: **10.3**
     *
     *   Serverless instance
     *
     *   Valid values when you set Engine to MySQL: **5.7** and **8.0**
     *   Valid values when you set Engine to SQLServer: **2016_std_sl**, **2017_std_sl**, and **2019_std_sl**
     *   Valid values when you set Engine to PostgreSQL: **14.0**, **15.0**, and **16.0**
     *
     * >
     *
     *   ApsaraDB RDS for MariaDB does not support serverless instances.
     *
     *   RDS instances that run SQL Server: `_ent` specifies SQL Server EE (Always On), `_ent_ha` specifies SQL Server EE, `_std_ha` specifies SQL Server SE, and `_web` specifies SQL Server Web.
     *
     *   RDS instances that run SQL Server 2014 are not available for purchase on the international site (alibabacloud.com).
     *
     *   Babelfish is supported only for RDS instances that run PostgreSQL 15.
     *
     * This parameter is required.
     * @example 5.6
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **VPC**: virtual private cloud (VPC)
     *   **Classic**: the classic network
     *
     * > *   If the instance runs MySQL and uses cloud disks, you must set this parameter to **VPC**.
     * > *   If the instance runs PostgreSQL or MariaDB, you must set this parameter to **VPC**.
     * > *   If the instance runs SQL Server Basic or SQL Server Web, you can set this parameter to VPC or Classic. If the instance runs other database engine, you must set this parameter to **VPC**.
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description Specifies whether to enable the I/O acceleration feature of general ESSDs. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * >  For more information about the I/O acceleration feature of general ESSDs, see [Introduction](https://help.aliyun.com/document_detail/2527067.html).
     * @example 0
     *
     * @var string
     */
    public $ioAccelerationEnabled;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *   **Serverless**: serverless. This value is not supported for instances that run MariaDB. For more information, see [Overview of serverless ApsaraDB RDS for MySQL instances](https://help.aliyun.com/document_detail/411291.html), [Overview of serverless ApsaraDB RDS for SQL Server instances](https://help.aliyun.com/document_detail/604344.html), and [Overview of serverless ApsaraDB RDS for PostgreSQL instances](https://help.aliyun.com/document_detail/607742.html).
     *
     * This parameter is required.
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * >  If you set the PayType parameter to **Prepaid**, you must specify this parameter.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The port. You can initialize the port when you create the instance.
     *
     *   Valid values if the instance runs MySQL: 1000 to 65534
     *   Valid values if the instance runs PostgreSQL, SQL Server, or MariaDB: 1000 to 5999
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The private IP address of the instance. The private IP address must be within the CIDR block that is supported by the specified vSwitch. ApsaraDB RDS automatically assigns a private IP address to the instance based on the values of the **VPCId** and **vSwitchId** parameters.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) that is provided by your Alibaba Cloud account for RAM users. RAM users can use the ARN to connect ApsaraDB RDS to KMS. You can call the CheckCloudResourceAuthorized operation to query the ARN.
     *
     * @example acs:ram::1406xxxxxx:role/aliyunrdsinstanceencryptiondefaultrole
     *
     * @var string
     */
    public $roleARN;

    /**
     * @description The IP address whitelist of the instance. For more information, see [Use a database client or the CLI to connect to an ApsaraDB RDS for MySQL instance](https://help.aliyun.com/document_detail/43185.html). If the IP address whitelist contains more than one entry, separate the entries with commas (,). Each entry must be unique. The IP address whitelist can contain up to 1,000 entries. The entries in the IP address whitelist must be in one of the following formats:
     *
     *   IP addresses, such as 10.10.XX.XX.
     *   CIDR blocks, such as 10.10.XX.XX/24. In this example, 24 indicates that the prefix of each IP address in the IP address whitelist is 24 bits in length. You can replace 24 with a value within the range of 1 to 32.
     *
     * This parameter is required.
     * @example 10.10.XX.XX/24
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The settings of the serverless instance. This parameter is required when you create a serverless instance.
     *
     * >  ApsaraDB RDS for MariaDB does not support serverless instances.
     * @var string
     */
    public $serverlessConfigShrink;

    /**
     * @description Specifies whether to enable the automatic storage expansion feature for the instance. This feature is supported if the instance runs MySQL or PostgreSQL. Valid values:
     *
     *   **Enable**
     *   **Disable** (default)
     *
     * >  After the instance is created, you can call the ModifyDasInstanceConfig operation to adjust the settings. For more information, see [Configure automatic storage expansion](https://help.aliyun.com/document_detail/173826.html).
     * @example Disable
     *
     * @var string
     */
    public $storageAutoScale;

    /**
     * @description The threshold in percentage based on which automatic storage expansion is triggered. Valid values:
     *
     *   **10**
     *   **20**
     *   **30**
     *   **40**
     *   **50**
     *
     * >  If you set the **StorageAutoScale** parameter to **Enable**, you must specify this parameter.
     * @example 50
     *
     * @var int
     */
    public $storageThreshold;

    /**
     * @description The maximum storage capacity that is allowed for automatic storage expansion. The storage capacity of the instance cannot exceed the maximum storage capacity. Unit: GB.
     *
     * > *   Valid values: an integer greater than or equal to 0.
     * > *   If you set **StorageAutoScale** to **Enable**, you must specify this parameter.
     * @example 2000
     *
     * @var int
     */
    public $storageUpperBound;

    /**
     * @description A deprecated parameter. You do not need to specify this parameter.
     *
     * @example gbk
     *
     * @var string
     */
    public $systemDBCharset;

    /**
     * @description The tags that are added to instances.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the host to which the logger instance belongs in the specified dedicated cluster.
     *
     * If you want to create an instance that runs RDS Enterprise Edition in a dedicated cluster, you must specify this parameter. If you do not specify this parameter, the system automatically assigns a host.
     *
     *   You can call the DescribeDedicatedHosts operation to query the host in the dedicated cluster.
     *   If no hosts are created, you can call the CreateDedicatedHost operation to create a host.
     *
     * @example i-bp*****3
     *
     * @var string
     */
    public $targetDedicatedHostIdForLog;

    /**
     * @description The ID of the host to which the instance belongs in the specified dedicated cluster.
     *
     * If you create the instance in a dedicated cluster, you must specify this parameter. If you do not specify this parameter, the system automatically assigns a host.
     *
     *   You can call the DescribeDedicatedHosts operation to query the host in the dedicated cluster.
     *   If no hosts are created, you can call the CreateDedicatedHost operation to create a host.
     *
     * @example i-bp*****1
     *
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @description The ID of the host to which the secondary instance belongs in the specified dedicated cluster.
     *
     * If you want to create an instance that runs RDS High-availability Edition or RDS Enterprise Edition in a dedicated cluster, you must specify this parameter. If you do not specify this parameter, the system automatically assigns a host.
     *
     *   You can call the DescribeDedicatedHosts operation to query the host in the dedicated cluster.
     *   If no hosts are created, you can call the CreateDedicatedHost operation to create a host.
     *
     * @example i-bp*****2
     *
     * @var string
     */
    public $targetDedicatedHostIdForSlave;

    /**
     * @description The minor engine version of the instance. This parameter is required only when you create an instance that runs MySQL or PostgreSQL. The value format varies based on the database engine of the instance.
     *
     *   If you create an instance that runs MySQL, the value is in the following format: `<RDS edition>_<Minor engine version>`. Examples: `rds_20200229`, `xcluster_20200229`, and `xcluster80_20200229`.
     *
     *   rds: The instance runs RDS Basic Edition or RDS High-availability Edition.
     *   xcluster: The instance runs MySQL 5.7 on RDS Enterprise Edition.
     *   xcluster80: The instance runs MySQL 8.0 on RDS Enterprise Edition.
     *
     * > You can call the DescribeDBMiniEngineVersions operation to query the minor engine version. For more information about the differences between minor engine versions of AliSQL, see [Release notes](https://help.aliyun.com/document_detail/96060.html).
     *
     *   If you create an instance that runs PostgreSQL, the value is in the following format: `rds_postgres_<Major engine version>00_<Minor engine version>`. Example: `rds_postgres_1400_20220830`.
     *
     *   1400: The major engine version is PostgreSQL 14.
     *   20220830: the AliPG version. You can call the DescribeDBMiniEngineVersions operation to query the AliPG version. For more information about minor engine versions, see [Release notes for AliPG](https://help.aliyun.com/document_detail/126002.html).
     *
     * > If you configure the **BabelfishConfig** parameter for your instance that runs PostgreSQL and set the babelfishEnabled field to true, the value of this parameter is in the following format: `rds_postgres_Major engine version00_AliPG version_babelfish`.
     * @example rds_20200229
     *
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @description The subscription duration of the instance.
     *
     *   If you set the **Period** parameter to **Year**, the value of the **UsedTime** parameter ranges from **1 to 5**.
     *   If you set the **Period** parameter to **Month**, the value of the **UsedTime** parameter ranges from **1 to 11**.
     *
     * >  If you set the PayType parameter to **Prepaid**, you must specify this parameter.
     * @example 2
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The ID of the full backup file. You can call the ListUserBackupFiles operation to query the ID of the full backup file. If you want to create an instance by using the data of a backup file, you must specify this parameter.
     *
     * This parameter is supported only when the following requirements are met:
     *
     *   The **PayType** parameter is set to **Postpaid**.
     *   The **Engine** parameter is set to **MySQL**.
     *   The **EngineVersion** parameter is set to **5.7**.
     *   The **Category** parameter is set to **Basic**.
     *
     * @example 67798*****
     *
     * @var string
     */
    public $userBackupId;

    /**
     * @description The ID of the VPC to which the instance belongs.
     *
     * > This parameter is available when you set the **InstanceNetworkType** parameter to **VPC**.
     * @example vpc-*****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch. The vSwitch must belong to the zone that is specified by **ZoneId**.
     *
     *   If you set **InstanceNetworkType** to **VPC**, you must also specify this parameter.
     *   If you specify the ZoneSlaveId1 parameter, you must specify the IDs of two vSwitches for this parameter and separate the IDs with a comma (,).
     *
     * @example vsw-*****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The entries in the whitelist. If you enter multiple IP addresses or CIDR blocks, you must separate the IP addresses or CIDR blocks with commas (,). Do not add spaces preceding or following the commas. Example: `192.168.0.1,172.16.213.9`.
     *
     * @example 192.XXX.XX.1,172.XXX.XX.9
     *
     * @var string
     */
    public $whitelistTemplateList;

    /**
     * @description The zone ID of the primary instance.
     *
     *   If you specify a virtual private cloud (VPC) and a vSwitch, you must specify the ID of the zone to which the specified vSwitch belongs. Otherwise, the instance cannot be created.
     *   If the instance runs RDS High-availability Edition, you must specify the **ZoneIdSlave1** parameter. The ZoneIdSlave1 parameter specifies whether to use the single-zone deployment method or the multi-zone deployment method.
     *   If the instance runs RDS Enterprise Edition, you must specify the **ZoneIdSlave1** and **ZoneIdSlave2** parameters. The ZoneIdSlave1 and ZoneIdSlave2 parameters specify whether to use the single-zone deployment method or the multi-zone deployment method.
     *   If the instance runs MySQL on RDS Cluster Edition, you must specify the **ZoneIdSlave1** parameter for the RDS cluster that has two nodes and the **ZoneIdSlave1** and **ZoneIdSlave2** parameters for the RDS cluster that has three nodes.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone ID of the secondary instance.
     *
     *   If you set this parameter to **Auto**, the multi-zone deployment method is used and the zone of the secondary instance is automatically configured.
     *   If you set this parameter to the same value as the **ZoneId** parameter, the single-zone deployment method is used.
     *   If you set this parameter to a value that is different from the value of the **ZoneId** parameter, the multiple-zone deployment method is used.
     *
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $zoneIdSlave1;

    /**
     * @description This parameter is deprecated.
     *
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $zoneIdSlave2;
    protected $_name = [
        'amount'                         => 'Amount',
        'autoCreateProxy'                => 'AutoCreateProxy',
        'autoPay'                        => 'AutoPay',
        'autoRenew'                      => 'AutoRenew',
        'babelfishConfig'                => 'BabelfishConfig',
        'bpeEnabled'                     => 'BpeEnabled',
        'burstingEnabled'                => 'BurstingEnabled',
        'businessInfo'                   => 'BusinessInfo',
        'category'                       => 'Category',
        'clientToken'                    => 'ClientToken',
        'coldDataEnabled'                => 'ColdDataEnabled',
        'connectionMode'                 => 'ConnectionMode',
        'connectionString'               => 'ConnectionString',
        'createStrategy'                 => 'CreateStrategy',
        'DBInstanceClass'                => 'DBInstanceClass',
        'DBInstanceDescription'          => 'DBInstanceDescription',
        'DBInstanceNetType'              => 'DBInstanceNetType',
        'DBInstanceStorage'              => 'DBInstanceStorage',
        'DBInstanceStorageType'          => 'DBInstanceStorageType',
        'DBIsIgnoreCase'                 => 'DBIsIgnoreCase',
        'DBParamGroupId'                 => 'DBParamGroupId',
        'DBTimeZone'                     => 'DBTimeZone',
        'dedicatedHostGroupId'           => 'DedicatedHostGroupId',
        'deletionProtection'             => 'DeletionProtection',
        'dryRun'                         => 'DryRun',
        'encryptionKey'                  => 'EncryptionKey',
        'engine'                         => 'Engine',
        'engineVersion'                  => 'EngineVersion',
        'instanceNetworkType'            => 'InstanceNetworkType',
        'ioAccelerationEnabled'          => 'IoAccelerationEnabled',
        'payType'                        => 'PayType',
        'period'                         => 'Period',
        'port'                           => 'Port',
        'privateIpAddress'               => 'PrivateIpAddress',
        'regionId'                       => 'RegionId',
        'resourceGroupId'                => 'ResourceGroupId',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'roleARN'                        => 'RoleARN',
        'securityIPList'                 => 'SecurityIPList',
        'serverlessConfigShrink'         => 'ServerlessConfig',
        'storageAutoScale'               => 'StorageAutoScale',
        'storageThreshold'               => 'StorageThreshold',
        'storageUpperBound'              => 'StorageUpperBound',
        'systemDBCharset'                => 'SystemDBCharset',
        'tag'                            => 'Tag',
        'targetDedicatedHostIdForLog'    => 'TargetDedicatedHostIdForLog',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'targetDedicatedHostIdForSlave'  => 'TargetDedicatedHostIdForSlave',
        'targetMinorVersion'             => 'TargetMinorVersion',
        'usedTime'                       => 'UsedTime',
        'userBackupId'                   => 'UserBackupId',
        'VPCId'                          => 'VPCId',
        'vSwitchId'                      => 'VSwitchId',
        'whitelistTemplateList'          => 'WhitelistTemplateList',
        'zoneId'                         => 'ZoneId',
        'zoneIdSlave1'                   => 'ZoneIdSlave1',
        'zoneIdSlave2'                   => 'ZoneIdSlave2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoCreateProxy) {
            $res['AutoCreateProxy'] = $this->autoCreateProxy;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->babelfishConfig) {
            $res['BabelfishConfig'] = $this->babelfishConfig;
        }
        if (null !== $this->bpeEnabled) {
            $res['BpeEnabled'] = $this->bpeEnabled;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->coldDataEnabled) {
            $res['ColdDataEnabled'] = $this->coldDataEnabled;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->createStrategy) {
            $res['CreateStrategy'] = $this->createStrategy;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBIsIgnoreCase) {
            $res['DBIsIgnoreCase'] = $this->DBIsIgnoreCase;
        }
        if (null !== $this->DBParamGroupId) {
            $res['DBParamGroupId'] = $this->DBParamGroupId;
        }
        if (null !== $this->DBTimeZone) {
            $res['DBTimeZone'] = $this->DBTimeZone;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->serverlessConfigShrink) {
            $res['ServerlessConfig'] = $this->serverlessConfigShrink;
        }
        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }
        if (null !== $this->storageThreshold) {
            $res['StorageThreshold'] = $this->storageThreshold;
        }
        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }
        if (null !== $this->systemDBCharset) {
            $res['SystemDBCharset'] = $this->systemDBCharset;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetDedicatedHostIdForLog) {
            $res['TargetDedicatedHostIdForLog'] = $this->targetDedicatedHostIdForLog;
        }
        if (null !== $this->targetDedicatedHostIdForMaster) {
            $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        }
        if (null !== $this->targetDedicatedHostIdForSlave) {
            $res['TargetDedicatedHostIdForSlave'] = $this->targetDedicatedHostIdForSlave;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->userBackupId) {
            $res['UserBackupId'] = $this->userBackupId;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->whitelistTemplateList) {
            $res['WhitelistTemplateList'] = $this->whitelistTemplateList;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneIdSlave1) {
            $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
        }
        if (null !== $this->zoneIdSlave2) {
            $res['ZoneIdSlave2'] = $this->zoneIdSlave2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoCreateProxy'])) {
            $model->autoCreateProxy = $map['AutoCreateProxy'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BabelfishConfig'])) {
            $model->babelfishConfig = $map['BabelfishConfig'];
        }
        if (isset($map['BpeEnabled'])) {
            $model->bpeEnabled = $map['BpeEnabled'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ColdDataEnabled'])) {
            $model->coldDataEnabled = $map['ColdDataEnabled'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CreateStrategy'])) {
            $model->createStrategy = $map['CreateStrategy'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBIsIgnoreCase'])) {
            $model->DBIsIgnoreCase = $map['DBIsIgnoreCase'];
        }
        if (isset($map['DBParamGroupId'])) {
            $model->DBParamGroupId = $map['DBParamGroupId'];
        }
        if (isset($map['DBTimeZone'])) {
            $model->DBTimeZone = $map['DBTimeZone'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfigShrink = $map['ServerlessConfig'];
        }
        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }
        if (isset($map['StorageThreshold'])) {
            $model->storageThreshold = $map['StorageThreshold'];
        }
        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }
        if (isset($map['SystemDBCharset'])) {
            $model->systemDBCharset = $map['SystemDBCharset'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetDedicatedHostIdForLog'])) {
            $model->targetDedicatedHostIdForLog = $map['TargetDedicatedHostIdForLog'];
        }
        if (isset($map['TargetDedicatedHostIdForMaster'])) {
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }
        if (isset($map['TargetDedicatedHostIdForSlave'])) {
            $model->targetDedicatedHostIdForSlave = $map['TargetDedicatedHostIdForSlave'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['UserBackupId'])) {
            $model->userBackupId = $map['UserBackupId'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['WhitelistTemplateList'])) {
            $model->whitelistTemplateList = $map['WhitelistTemplateList'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneIdSlave1'])) {
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }
        if (isset($map['ZoneIdSlave2'])) {
            $model->zoneIdSlave2 = $map['ZoneIdSlave2'];
        }

        return $model;
    }
}
