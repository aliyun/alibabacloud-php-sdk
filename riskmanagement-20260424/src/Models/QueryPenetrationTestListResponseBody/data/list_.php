<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryPenetrationTestListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $testEndDate;

    /**
     * @var int
     */
    public $testStartDate;
    protected $_name = [
        'applyTime' => 'ApplyTime',
        'assetType' => 'AssetType',
        'id' => 'Id',
        'ip' => 'Ip',
        'status' => 'Status',
        'testEndDate' => 'TestEndDate',
        'testStartDate' => 'TestStartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->testEndDate) {
            $res['TestEndDate'] = $this->testEndDate;
        }

        if (null !== $this->testStartDate) {
            $res['TestStartDate'] = $this->testStartDate;
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
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TestEndDate'])) {
            $model->testEndDate = $map['TestEndDate'];
        }

        if (isset($map['TestStartDate'])) {
            $model->testStartDate = $map['TestStartDate'];
        }

        return $model;
    }
}
