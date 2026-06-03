<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTypeDistributionResponseBody;

use AlibabaCloud\Dara\Model;

class timeList extends Model
{
    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var int
     */
    public $deleteSqlCount;

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
    public $otherSqlCount;

    /**
     * @var int
     */
    public $selectSqlCount;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var int
     */
    public $updateSqlCount;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'deleteSqlCount' => 'DeleteSqlCount',
        'endDate' => 'EndDate',
        'execCostUS' => 'ExecCostUS',
        'insertSqlCount' => 'InsertSqlCount',
        'otherSqlCount' => 'OtherSqlCount',
        'selectSqlCount' => 'SelectSqlCount',
        'sqlCount' => 'SqlCount',
        'updateSqlCount' => 'UpdateSqlCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->deleteSqlCount) {
            $res['DeleteSqlCount'] = $this->deleteSqlCount;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->execCostUS) {
            $res['ExecCostUS'] = $this->execCostUS;
        }

        if (null !== $this->insertSqlCount) {
            $res['InsertSqlCount'] = $this->insertSqlCount;
        }

        if (null !== $this->otherSqlCount) {
            $res['OtherSqlCount'] = $this->otherSqlCount;
        }

        if (null !== $this->selectSqlCount) {
            $res['SelectSqlCount'] = $this->selectSqlCount;
        }

        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }

        if (null !== $this->updateSqlCount) {
            $res['UpdateSqlCount'] = $this->updateSqlCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['DeleteSqlCount'])) {
            $model->deleteSqlCount = $map['DeleteSqlCount'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ExecCostUS'])) {
            $model->execCostUS = $map['ExecCostUS'];
        }

        if (isset($map['InsertSqlCount'])) {
            $model->insertSqlCount = $map['InsertSqlCount'];
        }

        if (isset($map['OtherSqlCount'])) {
            $model->otherSqlCount = $map['OtherSqlCount'];
        }

        if (isset($map['SelectSqlCount'])) {
            $model->selectSqlCount = $map['SelectSqlCount'];
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
