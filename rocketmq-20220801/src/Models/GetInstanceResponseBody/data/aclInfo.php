<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class aclInfo extends Model
{
    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string[]
     */
    public $aclTypes;

    /**
     * @var bool
     */
    public $defaultVpcAuthFree;
    protected $_name = [
        'aclType' => 'aclType',
        'aclTypes' => 'aclTypes',
        'defaultVpcAuthFree' => 'defaultVpcAuthFree',
    ];

    public function validate()
    {
        if (\is_array($this->aclTypes)) {
            Model::validateArray($this->aclTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['aclType'] = $this->aclType;
        }

        if (null !== $this->aclTypes) {
            if (\is_array($this->aclTypes)) {
                $res['aclTypes'] = [];
                $n1 = 0;
                foreach ($this->aclTypes as $item1) {
                    $res['aclTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultVpcAuthFree) {
            $res['defaultVpcAuthFree'] = $this->defaultVpcAuthFree;
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
        if (isset($map['aclType'])) {
            $model->aclType = $map['aclType'];
        }

        if (isset($map['aclTypes'])) {
            if (!empty($map['aclTypes'])) {
                $model->aclTypes = [];
                $n1 = 0;
                foreach ($map['aclTypes'] as $item1) {
                    $model->aclTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['defaultVpcAuthFree'])) {
            $model->defaultVpcAuthFree = $map['defaultVpcAuthFree'];
        }

        return $model;
    }
}
