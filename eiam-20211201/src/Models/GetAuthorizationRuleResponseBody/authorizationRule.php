<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationRuleResponseBody;

use AlibabaCloud\Dara\Model;

class authorizationRule extends Model
{
    /**
     * @var string
     */
    public $authorizationResourceScope;

    /**
     * @var string
     */
    public $authorizationRuleCreationType;

    /**
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @var string
     */
    public $authorizationRuleName;

    /**
     * @var int
     */
    public $createTime;

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
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'authorizationResourceScope' => 'AuthorizationResourceScope',
        'authorizationRuleCreationType' => 'AuthorizationRuleCreationType',
        'authorizationRuleId' => 'AuthorizationRuleId',
        'authorizationRuleName' => 'AuthorizationRuleName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'projectId' => 'ProjectId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
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

        if (null !== $this->authorizationRuleCreationType) {
            $res['AuthorizationRuleCreationType'] = $this->authorizationRuleCreationType;
        }

        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }

        if (null !== $this->authorizationRuleName) {
            $res['AuthorizationRuleName'] = $this->authorizationRuleName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['AuthorizationRuleCreationType'])) {
            $model->authorizationRuleCreationType = $map['AuthorizationRuleCreationType'];
        }

        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }

        if (isset($map['AuthorizationRuleName'])) {
            $model->authorizationRuleName = $map['AuthorizationRuleName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
