<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param;

use AlibabaCloud\Tea\Model;

class dbItemList extends Model
{
    /**
     * @description The ID of the database. You can call the [SearchDatabases](~~141876~~) operation to query the ID of the database.
     *
     * @example 1234
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is not a logical database.
     *
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
