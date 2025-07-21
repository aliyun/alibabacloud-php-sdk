<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetChatFlowMetricShrinkRequest extends Model
{
    /**
     * @description Business tenant code, default is “ALICOM_OPAAS”.
     *
     * @example ALICOM_OPAAS
     *
     * @var string
     */
    public $bizCode;

    /**
     * @description Business extension information, default is “{}”.
     *
     * @example {}
     *
     * @var string
     */
    public $bizExtendShrink;

    /**
     * @description Flow code.
     *
     * @example f4912c16943b4dfba44bd6fedacf****
     *
     * @var string
     */
    public $flowCode;

    /**
     * @description Flow version.
     *
     * @example 1
     *
     * @var string
     */
    public $flowVersion;

    /**
     * @description Start timestamp in seconds.
     *
     * @example 1751299200
     *
     * @var int
     */
    public $from;

    /**
     * @description Metric name.
     *
     * This parameter is required.
     *
     * @example nodeUsageStatistics
     *
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricParamShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description End timestamp in seconds.
     *
     * @example 1751385599
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtendShrink' => 'BizExtend',
        'flowCode' => 'FlowCode',
        'flowVersion' => 'FlowVersion',
        'from' => 'From',
        'metricName' => 'MetricName',
        'metricParamShrink' => 'MetricParam',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'to' => 'To',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->bizExtendShrink) {
            $res['BizExtend'] = $this->bizExtendShrink;
        }
        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }
        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricParamShrink) {
            $res['MetricParam'] = $this->metricParamShrink;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChatFlowMetricShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['BizExtend'])) {
            $model->bizExtendShrink = $map['BizExtend'];
        }
        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }
        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricParam'])) {
            $model->metricParamShrink = $map['MetricParam'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
