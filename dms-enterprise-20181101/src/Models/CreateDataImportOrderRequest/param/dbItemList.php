<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest\param;

use AlibabaCloud\Tea\Model;

class dbItemList extends Model
{
    /**
     * @description The ID of the database. The database can be a physical database or a logical database.
     *
     *   To obtain the ID of a physical database, call the [ListDatabases](https://help.aliyun.com/document_detail/141873.html) or [SearchDatabase](https://help.aliyun.com/document_detail/141876.html) operation.
     *   To obtain the ID of a logical database, call the [ListLogicDatabases](https://help.aliyun.com/document_detail/141874.html) or [SearchDatabase](https://help.aliyun.com/document_detail/141876.html) operation.
     *
     * This parameter is required.
     * @example 1860****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is a physical database.
     *
     * >  If you set this parameter to **true**, the database that you specify must be a logical database.
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $logic;
    protected $_name = [
        'dbId'  => 'DbId',
        'logic' => 'Logic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        return $model;
    }
}
