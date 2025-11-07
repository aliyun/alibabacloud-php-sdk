<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaStatisticsListResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var int
     */
    public $billCount;

    /**
     * @var string
     */
    public $billRate;

    /**
     * @var int
     */
    public $chargeCount;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var int
     */
    public $noRecordCount;

    /**
     * @var int
     */
    public $passedCount;

    /**
     * @var string
     */
    public $passedRate;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string
     */
    public $successRate;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $unpassedCount;
    protected $_name = [
        'api' => 'Api',
        'apiName' => 'ApiName',
        'billCount' => 'BillCount',
        'billRate' => 'BillRate',
        'chargeCount' => 'ChargeCount',
        'date' => 'Date',
        'ispName' => 'IspName',
        'noRecordCount' => 'NoRecordCount',
        'passedCount' => 'PassedCount',
        'passedRate' => 'PassedRate',
        'successCount' => 'SuccessCount',
        'successRate' => 'SuccessRate',
        'totalCount' => 'TotalCount',
        'unpassedCount' => 'UnpassedCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }

        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->billCount) {
            $res['BillCount'] = $this->billCount;
        }

        if (null !== $this->billRate) {
            $res['BillRate'] = $this->billRate;
        }

        if (null !== $this->chargeCount) {
            $res['ChargeCount'] = $this->chargeCount;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }

        if (null !== $this->noRecordCount) {
            $res['NoRecordCount'] = $this->noRecordCount;
        }

        if (null !== $this->passedCount) {
            $res['PassedCount'] = $this->passedCount;
        }

        if (null !== $this->passedRate) {
            $res['PassedRate'] = $this->passedRate;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->unpassedCount) {
            $res['UnpassedCount'] = $this->unpassedCount;
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
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }

        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['BillCount'])) {
            $model->billCount = $map['BillCount'];
        }

        if (isset($map['BillRate'])) {
            $model->billRate = $map['BillRate'];
        }

        if (isset($map['ChargeCount'])) {
            $model->chargeCount = $map['ChargeCount'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        if (isset($map['NoRecordCount'])) {
            $model->noRecordCount = $map['NoRecordCount'];
        }

        if (isset($map['PassedCount'])) {
            $model->passedCount = $map['PassedCount'];
        }

        if (isset($map['PassedRate'])) {
            $model->passedRate = $map['PassedRate'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UnpassedCount'])) {
            $model->unpassedCount = $map['UnpassedCount'];
        }

        return $model;
    }
}
