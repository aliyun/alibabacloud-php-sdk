<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListRequest\whiteListPolicies;

class ConfigInstanceWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $whiteList;

    /**
     * @var whiteListPolicies[]
     */
    public $whiteListPolicies;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'whiteList' => 'WhiteList',
        'whiteListPolicies' => 'WhiteListPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->whiteList)) {
            Model::validateArray($this->whiteList);
        }
        if (\is_array($this->whiteListPolicies)) {
            Model::validateArray($this->whiteListPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->whiteList) {
            if (\is_array($this->whiteList)) {
                $res['WhiteList'] = [];
                $n1 = 0;
                foreach ($this->whiteList as $item1) {
                    $res['WhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whiteListPolicies) {
            if (\is_array($this->whiteListPolicies)) {
                $res['WhiteListPolicies'] = [];
                $n1 = 0;
                foreach ($this->whiteListPolicies as $item1) {
                    $res['WhiteListPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = [];
                $n1 = 0;
                foreach ($map['WhiteList'] as $item1) {
                    $model->whiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WhiteListPolicies'])) {
            if (!empty($map['WhiteListPolicies'])) {
                $model->whiteListPolicies = [];
                $n1 = 0;
                foreach ($map['WhiteListPolicies'] as $item1) {
                    $model->whiteListPolicies[$n1] = whiteListPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
