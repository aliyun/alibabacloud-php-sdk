<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateAuthorizationRuleRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationResourceScope;

    /**
     * @var string
     */
    public $authorizationRuleName;

    /**
     * @var string
     */
    public $authorizationRuleScenarioLabel;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $subjectType;
    protected $_name = [
        'authorizationResourceScope' => 'AuthorizationResourceScope',
        'authorizationRuleName' => 'AuthorizationRuleName',
        'authorizationRuleScenarioLabel' => 'AuthorizationRuleScenarioLabel',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'projectId' => 'ProjectId',
        'subjectType' => 'SubjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationResourceScope) {
            $res['AuthorizationResourceScope'] = $this->authorizationResourceScope;
        }

        if (null !== $this->authorizationRuleName) {
            $res['AuthorizationRuleName'] = $this->authorizationRuleName;
        }

        if (null !== $this->authorizationRuleScenarioLabel) {
            $res['AuthorizationRuleScenarioLabel'] = $this->authorizationRuleScenarioLabel;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->subjectType) {
            $res['SubjectType'] = $this->subjectType;
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
        if (isset($map['AuthorizationResourceScope'])) {
            $model->authorizationResourceScope = $map['AuthorizationResourceScope'];
        }

        if (isset($map['AuthorizationRuleName'])) {
            $model->authorizationRuleName = $map['AuthorizationRuleName'];
        }

        if (isset($map['AuthorizationRuleScenarioLabel'])) {
            $model->authorizationRuleScenarioLabel = $map['AuthorizationRuleScenarioLabel'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SubjectType'])) {
            $model->subjectType = $map['SubjectType'];
        }

        return $model;
    }
}
