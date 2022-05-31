<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsResponseBody;

use AlibabaCloud\Tea\Model;

class remediations extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $invokeType;

    /**
     * @var string
     */
    public $lastSuccessfulInvocationId;

    /**
     * @var int
     */
    public $lastSuccessfulInvocationTime;

    /**
     * @var string
     */
    public $lastSuccessfulInvocationType;

    /**
     * @var string
     */
    public $remediationId;

    /**
     * @var string
     */
    public $remediationOriginParams;

    /**
     * @var string
     */
    public $remediationSourceType;

    /**
     * @var string
     */
    public $remediationTemplateId;

    /**
     * @var string
     */
    public $remediationType;
    protected $_name = [
        'accountId'                    => 'AccountId',
        'configRuleId'                 => 'ConfigRuleId',
        'invokeType'                   => 'InvokeType',
        'lastSuccessfulInvocationId'   => 'LastSuccessfulInvocationId',
        'lastSuccessfulInvocationTime' => 'LastSuccessfulInvocationTime',
        'lastSuccessfulInvocationType' => 'LastSuccessfulInvocationType',
        'remediationId'                => 'RemediationId',
        'remediationOriginParams'      => 'RemediationOriginParams',
        'remediationSourceType'        => 'RemediationSourceType',
        'remediationTemplateId'        => 'RemediationTemplateId',
        'remediationType'              => 'RemediationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }
        if (null !== $this->lastSuccessfulInvocationId) {
            $res['LastSuccessfulInvocationId'] = $this->lastSuccessfulInvocationId;
        }
        if (null !== $this->lastSuccessfulInvocationTime) {
            $res['LastSuccessfulInvocationTime'] = $this->lastSuccessfulInvocationTime;
        }
        if (null !== $this->lastSuccessfulInvocationType) {
            $res['LastSuccessfulInvocationType'] = $this->lastSuccessfulInvocationType;
        }
        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }
        if (null !== $this->remediationOriginParams) {
            $res['RemediationOriginParams'] = $this->remediationOriginParams;
        }
        if (null !== $this->remediationSourceType) {
            $res['RemediationSourceType'] = $this->remediationSourceType;
        }
        if (null !== $this->remediationTemplateId) {
            $res['RemediationTemplateId'] = $this->remediationTemplateId;
        }
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }
        if (isset($map['LastSuccessfulInvocationId'])) {
            $model->lastSuccessfulInvocationId = $map['LastSuccessfulInvocationId'];
        }
        if (isset($map['LastSuccessfulInvocationTime'])) {
            $model->lastSuccessfulInvocationTime = $map['LastSuccessfulInvocationTime'];
        }
        if (isset($map['LastSuccessfulInvocationType'])) {
            $model->lastSuccessfulInvocationType = $map['LastSuccessfulInvocationType'];
        }
        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }
        if (isset($map['RemediationOriginParams'])) {
            $model->remediationOriginParams = $map['RemediationOriginParams'];
        }
        if (isset($map['RemediationSourceType'])) {
            $model->remediationSourceType = $map['RemediationSourceType'];
        }
        if (isset($map['RemediationTemplateId'])) {
            $model->remediationTemplateId = $map['RemediationTemplateId'];
        }
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }

        return $model;
    }
}
