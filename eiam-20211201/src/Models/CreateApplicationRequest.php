<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationRequest\applicationOwner;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationRequest\customFields;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $applicationIdentityType;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var applicationOwner
     */
    public $applicationOwner;

    /**
     * @var string
     */
    public $applicationSourceType;

    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var customFields[]
     */
    public $customFields;

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
    public $logoUrl;

    /**
     * @var string
     */
    public $ssoType;
    protected $_name = [
        'applicationIdentityType' => 'ApplicationIdentityType',
        'applicationName' => 'ApplicationName',
        'applicationOwner' => 'ApplicationOwner',
        'applicationSourceType' => 'ApplicationSourceType',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'customFields' => 'CustomFields',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'logoUrl' => 'LogoUrl',
        'ssoType' => 'SsoType',
    ];

    public function validate()
    {
        if (null !== $this->applicationOwner) {
            $this->applicationOwner->validate();
        }
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationIdentityType) {
            $res['ApplicationIdentityType'] = $this->applicationIdentityType;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->applicationOwner) {
            $res['ApplicationOwner'] = null !== $this->applicationOwner ? $this->applicationOwner->toArray($noStream) : $this->applicationOwner;
        }

        if (null !== $this->applicationSourceType) {
            $res['ApplicationSourceType'] = $this->applicationSourceType;
        }

        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['CustomFields'] = [];
                $n1 = 0;
                foreach ($this->customFields as $item1) {
                    $res['CustomFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
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
        if (isset($map['ApplicationIdentityType'])) {
            $model->applicationIdentityType = $map['ApplicationIdentityType'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ApplicationOwner'])) {
            $model->applicationOwner = applicationOwner::fromMap($map['ApplicationOwner']);
        }

        if (isset($map['ApplicationSourceType'])) {
            $model->applicationSourceType = $map['ApplicationSourceType'];
        }

        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['CustomFields'])) {
            if (!empty($map['CustomFields'])) {
                $model->customFields = [];
                $n1 = 0;
                foreach ($map['CustomFields'] as $item1) {
                    $model->customFields[$n1] = customFields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
        }

        return $model;
    }
}
