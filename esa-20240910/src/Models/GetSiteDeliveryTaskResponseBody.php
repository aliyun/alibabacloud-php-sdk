<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetSiteDeliveryTaskResponseBody extends Model
{
    /**
     * @description The log category. Valid values:
     *
     *   dcdn_log_access_l1 (default): access logs.
     *   dcdn_log_er: Edge Routine logs.
     *   dcdn_log_waf: firewall logs.
     *   dcdn_log_ipa: TCP/UDP proxy logs.
     *
     * @example dcdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The data center. Valid values:
     *
     * 2.  sg: outside the Chinese mainland.
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The destination of the delivery. Valid values:
     *
     * 6.  aws3cmpt: S3-compatible storage service.
     * @example sls
     *
     * @var string
     */
    public $deliveryType;

    /**
     * @description The discard rate.
     *
     * @example 0.0
     *
     * @var float
     */
    public $discardRate;

    /**
     * @description The log fields.
     *
     * @example Client,UserAgent
     *
     * @var string
     */
    public $fieldList;

    /**
     * @description The filtering rules.
     *
     * @example []
     *
     * @var string
     */
    public $filterRules;

    /**
     * @description The request ID.
     *
     * @example 34DCBC8A-****-****-****-6DAA11D7DDBD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The delivery configuration.
     *
     * @example {\\"Region\\": \\"cn-hangzhou\\", \\"Endpoint\\": \\"https://***.oss-cn-hangzhou.aliyuncs.com\\", \\"BucketPath\\": \\"hjy-test002/online-logs\\"}
     *
     * @var mixed
     */
    public $sinkConfig;

    /**
     * @description The website ID.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The website name.
     *
     * @example test.***.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @description The status of the delivery task.
     *
     *   **online**
     *   **offline**
     *
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the delivery task.
     *
     * @example cdn-test-task
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
        'siteId'       => 'SiteId',
        'siteName'     => 'SiteName',
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
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
     * @return GetSiteDeliveryTaskResponseBody
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
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
