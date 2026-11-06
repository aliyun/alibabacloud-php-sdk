<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCloudPermissionTemplateRequest\applicableScope;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCloudPermissionTemplateRequest\cloudAccountResources;

class CreateCloudPermissionTemplateRequest extends Model
{
    /**
     * @var bool
     */
    public $allowRequest;

    /**
     * @var applicableScope
     */
    public $applicableScope;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var cloudAccountResources[]
     */
    public $cloudAccountResources;

    /**
     * @var string
     */
    public $cloudPermissionTemplateName;

    /**
     * @var string
     */
    public $cloudPermissionTemplateUsageType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'allowRequest' => 'AllowRequest',
        'applicableScope' => 'ApplicableScope',
        'clientToken' => 'ClientToken',
        'cloudAccountId' => 'CloudAccountId',
        'cloudAccountResources' => 'CloudAccountResources',
        'cloudPermissionTemplateName' => 'CloudPermissionTemplateName',
        'cloudPermissionTemplateUsageType' => 'CloudPermissionTemplateUsageType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (null !== $this->applicableScope) {
            $this->applicableScope->validate();
        }
        if (\is_array($this->cloudAccountResources)) {
            Model::validateArray($this->cloudAccountResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowRequest) {
            $res['AllowRequest'] = $this->allowRequest;
        }

        if (null !== $this->applicableScope) {
            $res['ApplicableScope'] = null !== $this->applicableScope ? $this->applicableScope->toArray($noStream) : $this->applicableScope;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountResources) {
            if (\is_array($this->cloudAccountResources)) {
                $res['CloudAccountResources'] = [];
                $n1 = 0;
                foreach ($this->cloudAccountResources as $item1) {
                    $res['CloudAccountResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cloudPermissionTemplateName) {
            $res['CloudPermissionTemplateName'] = $this->cloudPermissionTemplateName;
        }

        if (null !== $this->cloudPermissionTemplateUsageType) {
            $res['CloudPermissionTemplateUsageType'] = $this->cloudPermissionTemplateUsageType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AllowRequest'])) {
            $model->allowRequest = $map['AllowRequest'];
        }

        if (isset($map['ApplicableScope'])) {
            $model->applicableScope = applicableScope::fromMap($map['ApplicableScope']);
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudAccountResources'])) {
            if (!empty($map['CloudAccountResources'])) {
                $model->cloudAccountResources = [];
                $n1 = 0;
                foreach ($map['CloudAccountResources'] as $item1) {
                    $model->cloudAccountResources[$n1] = cloudAccountResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CloudPermissionTemplateName'])) {
            $model->cloudPermissionTemplateName = $map['CloudPermissionTemplateName'];
        }

        if (isset($map['CloudPermissionTemplateUsageType'])) {
            $model->cloudPermissionTemplateUsageType = $map['CloudPermissionTemplateUsageType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
