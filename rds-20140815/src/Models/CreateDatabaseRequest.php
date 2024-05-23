<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
{
    /**
     * @description The character set.
     *
     *   Valid values for MySQL or MariaDB databases: **utf8, gbk, latin1, and utf8mb4**
     *
     *   Valid values for SQL Server databases: **Chinese_PRC_CI_AS, Chinese_PRC_CS_AS, SQL_Latin1_General_CP1_CI_AS, SQL_Latin1_General_CP1_CS_AS, and Chinese_PRC_BIN**
     *
     *   Valid values for PostgreSQL databases: a value in the `Character set,<Collate>,<Ctype>` format. Example: `UTF8,C,en_US.utf8`.
     *
     *   Valid values for the character set: **KOI8U, UTF8, WIN866, WIN874, WIN1250, WIN1251, WIN1252, WIN1253, WIN1254, WIN1255, WIN1256, WIN1257, WIN1258, EUC_CN, EUC_KR, EUC_TW, EUC_JP, EUC_JIS_2004, KOI8R, MULE_INTERNAL, LATIN1, LATIN2, LATIN3, LATIN4, LATIN5, LATIN6, LATIN7, LATIN8, LATIN9, LATIN10, ISO_8859_5, ISO_8859_6, ISO_8859_7, ISO_8859_8, and SQL_ASCII**
     *   Valid values for the **Collate** field: You can execute the `SELECT DISTINCT collname FROM pg_collation;` statement to obtain the field value. The default value is **C**.
     *   Valid values for the **Ctype** field: You can execute the `SELECT DISTINCT collctype FROM pg_collation;` statement to obtain the field value. The default value is **en_US.utf8**.
     *
     * This parameter is required.
     * @example gbk
     *
     * @var string
     */
    public $characterSetName;

    /**
     * @description The description of the database. The description must be 2 to 256 characters in length and can contain letters, digits, underscores (_), and hyphens (-). The description must start with a letter.
     *
     * > The value cannot start with `http://` or `https://`.
     * @example Database for testing
     *
     * @var string
     */
    public $DBDescription;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/610396.html) operation to query the ID of the instance.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database.
     *
     * > *   The name must be 2 to 64 characters in length.
     * > *   The name must start with a lowercase letter and end with a lowercase letter or digit.
     * > *   The name can contain lowercase letters, digits, underscores (_), and hyphens (-).
     * > *   The name must be unique within the instance.
     * > *   For more information about invalid characters, see [Forbidden keywords table](https://help.aliyun.com/document_detail/26317.html).
     *
     * This parameter is required.
     * @example rds_mysql
     *
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'characterSetName'     => 'CharacterSetName',
        'DBDescription'        => 'DBDescription',
        'DBInstanceId'         => 'DBInstanceId',
        'DBName'               => 'DBName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }
        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }
        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
