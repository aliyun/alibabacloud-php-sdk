<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetUserDeliveryTaskResponseBody extends Model
{
    /**
     * @example dcdn_log_er
     *
     * @var string
     */
    public $businessType;

    /**
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @example oss
     *
     * @var string
     */
    public $deliveryType;

    /**
     * @example 0
     *
     * @var float
     */
    public $discardRate;

    /**
     * @example ClientRequestID,ClientRequestHost
     *
     * @var string
     */
    public $fieldList;

    /**
     * @example [{"ClientSSLProtocol": {"equals": ["TLSv1.3"]}}]
     *
     * @var string
     */
    public $filterRules;

    /**
     * @description Id of the request
     *
     * @example 7072132a-bd3c-46a6-9e81-aba3e0e3f861
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {\\"Project\\": \\"er-online-hjy-pro\\", \\"Logstore\\": \\"er-online-hjy-log\\", \\"Region\\": \\"cn-hangzhou\\", \\"Endpoint\\": \\"cn-hangzhou.log.aliyuncs.com\\", \\"Aliuid\\": \\"1077912128805410\\"}
     *
     * @var mixed
     */
    public $sinkConfig;

    /**
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @example testoss11
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter'   => 'DataCenter',
        'deliveryType' => 'DeliveryType',
        'discardRate'  => 'DiscardRate',
        'fieldList'    => 'FieldList',
        'filterRules'  => 'FilterRules',
        'requestId'    => 'RequestId',
        'sinkConfig'   => 'SinkConfig',
        'status'       => 'Status',
        'taskName'     => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }
        if (null !== $this->fieldList) {
            $res['FieldList'] = $this->fieldList;
        }
        if (null !== $this->filterRules) {
            $res['FilterRules'] = $this->filterRules;
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

    /**
     * @param array $map
     *
     * @return GetUserDeliveryTaskResponseBody
     */
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
        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }
        if (isset($map['FieldList'])) {
            $model->fieldList = $map['FieldList'];
        }
        if (isset($map['FilterRules'])) {
            $model->filterRules = $map['FilterRules'];
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
