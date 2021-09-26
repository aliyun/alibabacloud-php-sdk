<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTypeDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class timeList extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $execCostUS;

    /**
     * @var int
     */
    public $insertSqlCount;

    /**
     * @var int
     */
    public $selectSqlCount;

    /**
     * @var int
     */
    public $deleteSqlCount;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var int
     */
    public $otherSqlCount;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var int
     */
    public $updateSqlCount;
    protected $_name = [
        'endDate'        => 'EndDate',
        'execCostUS'     => 'ExecCostUS',
        'insertSqlCount' => 'InsertSqlCount',
        'selectSqlCount' => 'SelectSqlCount',
        'deleteSqlCount' => 'DeleteSqlCount',
        'beginDate'      => 'BeginDate',
        'otherSqlCount'  => 'OtherSqlCount',
        'sqlCount'       => 'SqlCount',
        'updateSqlCount' => 'UpdateSqlCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->execCostUS) {
            $res['ExecCostUS'] = $this->execCostUS;
        }
        if (null !== $this->insertSqlCount) {
            $res['InsertSqlCount'] = $this->insertSqlCount;
        }
        if (null !== $this->selectSqlCount) {
            $res['SelectSqlCount'] = $this->selectSqlCount;
        }
        if (null !== $this->deleteSqlCount) {
            $res['DeleteSqlCount'] = $this->deleteSqlCount;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->otherSqlCount) {
            $res['OtherSqlCount'] = $this->otherSqlCount;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->updateSqlCount) {
            $res['UpdateSqlCount'] = $this->updateSqlCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExecCostUS'])) {
            $model->execCostUS = $map['ExecCostUS'];
        }
        if (isset($map['InsertSqlCount'])) {
            $model->insertSqlCount = $map['InsertSqlCount'];
        }
        if (isset($map['SelectSqlCount'])) {
            $model->selectSqlCount = $map['SelectSqlCount'];
        }
        if (isset($map['DeleteSqlCount'])) {
            $model->deleteSqlCount = $map['DeleteSqlCount'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['OtherSqlCount'])) {
            $model->otherSqlCount = $map['OtherSqlCount'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['UpdateSqlCount'])) {
            $model->updateSqlCount = $map['UpdateSqlCount'];
        }

        return $model;
    }
}
