<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param;

use AlibabaCloud\Tea\Model;

class cronClearItemList extends Model
{
    /**
     * @description The amount of time taken to run the task. Unit: hours.
     *
     * >  If the **specifyDuration** parameter is set to **true**, this parameter is required.
     * @example gmt_create
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The retention period of the historical data. Unit: days. For example, if you set the parameter to 7, DMS deletes the data that is retained for more than seven days.
     *
     * @example where 1 = 1
     *
     * @var string
     */
    public $filterSQL;

    /**
     * @description The crontab expression that you can use to run the task at a specified time. For more information, see [Crontab expression](~~206581~~).
     *
     * @example 7
     *
     * @var int
     */
    public $remainDays;

    /**
     * @description The parameters of the ticket.
     *
     * @example t1
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The error message.
     *
     * @example MILLISECONDS
     *
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'columnName' => 'ColumnName',
        'filterSQL'  => 'FilterSQL',
        'remainDays' => 'RemainDays',
        'tableName'  => 'TableName',
        'timeUnit'   => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->filterSQL) {
            $res['FilterSQL'] = $this->filterSQL;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cronClearItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['FilterSQL'])) {
            $model->filterSQL = $map['FilterSQL'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
