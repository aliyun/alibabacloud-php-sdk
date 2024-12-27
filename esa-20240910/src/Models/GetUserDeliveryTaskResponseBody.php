<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetUserDeliveryTaskResponseBody extends Model
{
    /**
     * @description The log category. Valid values:
     *
     *   **dcdn_log_access_l1** (default): access logs.
     *   **dcdn_log_er**: Edge Routine logs.
     *   **dcdn_log_waf**: firewall logs.
     *   **dcdn_log_ipa**: TCP/UDP proxy logs.
     *
     * @example dcdn_log_er
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The data center. Valid values:
     *
     *   cn: the Chinese mainland.
     *   sg: outside the Chinese mainland.
     *
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The destination of the delivery. Valid values:
     *
     *   sls: Alibaba Cloud Simple Log Service (SLS).
     *   http: HTTP server.
     *   aws3: Amazon Simple Storage Service (S3).
     *   oss: Alibaba Cloud Object Storage Service (OSS).
     *   kafka: Kafka.
     *   aws3cmpt: S3-compatible storage service.
     *
     * @example oss
     *
     * @var string
     */
    public $deliveryType;

    /**
     * @var string
     */
    public $details;

    /**
     * @description The discard rate.
     *
     * @example 0
     *
     * @var float
     */
    public $discardRate;

    /**
     * @description The fields.
     *
     * @example ClientRequestID,ClientRequestHost
     *
     * @var string
     */
    public $fieldList;

    /**
     * @description The filtering rules.
     *
     * @example [{"ClientSSLProtocol": {"equals": ["TLSv1.3"]}}]
     *
     * @var string
     */
    public $filterRules;

    /**
     * @description The request ID.
     *
     * @example 7072132a-bd3c-46a6-9e81-aba3e0e3f861
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The delivery configuration.
     *
     * @example {\\"Project\\": \\"er-online-hjy-pro\\", \\"Logstore\\": \\"er-online-hjy-log\\", \\"Region\\": \\"cn-hangzhou\\", \\"Endpoint\\": \\"cn-hangzhou.log.aliyuncs.com\\", \\"Aliuid\\": \\"1077912128805410\\"}
     *
     * @var mixed
     */
    public $sinkConfig;

    /**
     * @description The status of the delivery task.
     *
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the delivery task.
     *
     * @example testoss11
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter'   => 'DataCenter',
        'deliveryType' => 'DeliveryType',
        'details'      => 'Details',
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
