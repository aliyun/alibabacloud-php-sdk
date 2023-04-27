<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param;

use AlibabaCloud\Tea\Model;

class dbItemList extends Model
{
    /**
     * @description The type of time granularity. If the ColumnName parameter specifies a field of a time type, this parameter is required. Valid values:
     *
     *   **MILLISECONDS**: milliseconds
     *   **SECONDS**: seconds
     *
     * @example 1234
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The tables for which you want to clear historical data.
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
