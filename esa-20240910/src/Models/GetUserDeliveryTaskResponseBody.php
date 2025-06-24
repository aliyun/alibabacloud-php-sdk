<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetUserDeliveryTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $deliveryType;

    /**
     * @var string
     */
    public $details;

    /**
     * @var float
     */
    public $discardRate;

    /**
     * @var string
     */
    public $fieldList;

    /**
     * @var string
     */
    public $filterRules;

    /**
     * @var string
     */
    public $filterVer;

    /**
     * @var string
     */
    public $rawRule;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed
     */
    public $sinkConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter' => 'DataCenter',
        'deliveryType' => 'DeliveryType',
        'details' => 'Details',
        'discardRate' => 'DiscardRate',
        'fieldList' => 'FieldList',
        'filterRules' => 'FilterRules',
        'filterVer' => 'FilterVer',
        'rawRule' => 'RawRule',
        'requestId' => 'RequestId',
        'sinkConfig' => 'SinkConfig',
        'status' => 'Status',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }

        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }

        if (null !== $this->fieldList) {
            $res['FieldList'] = $this->fieldList;
        }

        if (null !== $this->filterRules) {
            $res['FilterRules'] = $this->filterRules;
        }

        if (null !== $this->filterVer) {
            $res['FilterVer'] = $this->filterVer;
        }

        if (null !== $this->rawRule) {
            $res['RawRule'] = $this->rawRule;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sinkConfig) {
            $res['SinkConfig'] = $this->sinkConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }

        if (isset($map['FieldList'])) {
            $model->fieldList = $map['FieldList'];
        }

        if (isset($map['FilterRules'])) {
            $model->filterRules = $map['FilterRules'];
        }

        if (isset($map['FilterVer'])) {
            $model->filterVer = $map['FilterVer'];
        }

        if (isset($map['RawRule'])) {
            $model->rawRule = $map['RawRule'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SinkConfig'])) {
            $model->sinkConfig = $map['SinkConfig'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
