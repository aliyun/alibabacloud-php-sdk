<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildRuleResponseBody\parameters;

class GetArtifactBuildRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $artifactType;

    /**
     * @var string
     */
    public $buildRuleId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scopeId;

    /**
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'buildRuleId' => 'BuildRuleId',
        'code' => 'Code',
        'isSuccess' => 'IsSuccess',
        'parameters' => 'Parameters',
        'requestId' => 'RequestId',
        'scopeId' => 'ScopeId',
        'scopeType' => 'ScopeType',
    ];

    public function validate()
    {
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }

        if (null !== $this->buildRuleId) {
            $res['BuildRuleId'] = $this->buildRuleId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
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
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }

        if (isset($map['BuildRuleId'])) {
            $model->buildRuleId = $map['BuildRuleId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
