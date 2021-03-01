<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowControlRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $consumerAppId;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var string
     */
    public $urlVar;
    protected $_name = [
        'appId'         => 'AppId',
        'ruleId'        => 'RuleId',
        'consumerAppId' => 'ConsumerAppId',
        'granularity'   => 'Granularity',
        'methodName'    => 'MethodName',
        'ruleType'      => 'RuleType',
        'serviceName'   => 'ServiceName',
        'strategy'      => 'Strategy',
        'threshold'     => 'Threshold',
        'urlVar'        => 'UrlVar',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->consumerAppId) {
            $res['ConsumerAppId'] = $this->consumerAppId;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->urlVar) {
            $res['UrlVar'] = $this->urlVar;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlowControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ConsumerAppId'])) {
            $model->consumerAppId = $map['ConsumerAppId'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['UrlVar'])) {
            $model->urlVar = $map['UrlVar'];
        }

        return $model;
    }
}
