<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetArtifactBuildRuleRequest extends Model
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
    public $instanceId;

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
        'instanceId' => 'InstanceId',
        'scopeId' => 'ScopeId',
        'scopeType' => 'ScopeType',
    ];

    public function validate()
    {
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
