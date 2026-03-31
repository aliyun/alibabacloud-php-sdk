<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationInfoRequest\applicationOwner;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationInfoRequest\customFields;

class UpdateApplicationInfoRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var applicationOwner
     */
    public $applicationOwner;

    /**
     * @var string[]
     */
    public $applicationVisibility;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var customFields[]
     */
    public $customFields;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $logoUrl;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'applicationOwner' => 'ApplicationOwner',
        'applicationVisibility' => 'ApplicationVisibility',
        'clientToken' => 'ClientToken',
        'customFields' => 'CustomFields',
        'instanceId' => 'InstanceId',
        'logoUrl' => 'LogoUrl',
    ];

    public function validate()
    {
        if (null !== $this->applicationOwner) {
            $this->applicationOwner->validate();
        }
        if (\is_array($this->applicationVisibility)) {
            Model::validateArray($this->applicationVisibility);
        }
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->applicationOwner) {
            $res['ApplicationOwner'] = null !== $this->applicationOwner ? $this->applicationOwner->toArray($noStream) : $this->applicationOwner;
        }

        if (null !== $this->applicationVisibility) {
            if (\is_array($this->applicationVisibility)) {
                $res['ApplicationVisibility'] = [];
                $n1 = 0;
                foreach ($this->applicationVisibility as $item1) {
                    $res['ApplicationVisibility'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ApplicationOwner'])) {
            $model->applicationOwner = applicationOwner::fromMap($map['ApplicationOwner']);
        }

        if (isset($map['ApplicationVisibility'])) {
            if (!empty($map['ApplicationVisibility'])) {
                $model->applicationVisibility = [];
                $n1 = 0;
                foreach ($map['ApplicationVisibility'] as $item1) {
                    $model->applicationVisibility[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        return $model;
    }
}
