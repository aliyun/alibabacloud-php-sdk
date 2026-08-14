<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachProjectManagersToProjectAuthorizationRequest\principals;

class AttachProjectManagersToProjectAuthorizationRequest extends Model
{
    /**
     * @var int
     */
    public $authorizationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var principals[]
     */
    public $principals;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authorizationId' => 'AuthorizationId',
        'instanceId' => 'InstanceId',
        'principals' => 'Principals',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->principals)) {
            Model::validateArray($this->principals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['AuthorizationId'] = $this->authorizationId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->principals) {
            if (\is_array($this->principals)) {
                $res['Principals'] = [];
                $n1 = 0;
                foreach ($this->principals as $item1) {
                    $res['Principals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AuthorizationId'])) {
            $model->authorizationId = $map['AuthorizationId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Principals'])) {
            if (!empty($map['Principals'])) {
                $model->principals = [];
                $n1 = 0;
                foreach ($map['Principals'] as $item1) {
                    $model->principals[$n1] = principals::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
