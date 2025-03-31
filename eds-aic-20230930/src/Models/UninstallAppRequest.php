<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class UninstallAppRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;

    /**
     * @var string[]
     */
    public $instanceGroupIdList;

    /**
     * @var string[]
     */
    public $instanceIdList;
    protected $_name = [
        'appIdList' => 'AppIdList',
        'instanceGroupIdList' => 'InstanceGroupIdList',
        'instanceIdList' => 'InstanceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->appIdList)) {
            Model::validateArray($this->appIdList);
        }
        if (\is_array($this->instanceGroupIdList)) {
            Model::validateArray($this->instanceGroupIdList);
        }
        if (\is_array($this->instanceIdList)) {
            Model::validateArray($this->instanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIdList) {
            if (\is_array($this->appIdList)) {
                $res['AppIdList'] = [];
                $n1 = 0;
                foreach ($this->appIdList as $item1) {
                    $res['AppIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceGroupIdList) {
            if (\is_array($this->instanceGroupIdList)) {
                $res['InstanceGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->instanceGroupIdList as $item1) {
                    $res['InstanceGroupIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceIdList) {
            if (\is_array($this->instanceIdList)) {
                $res['InstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->instanceIdList as $item1) {
                    $res['InstanceIdList'][$n1++] = $item1;
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
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = [];
                $n1 = 0;
                foreach ($map['AppIdList'] as $item1) {
                    $model->appIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceGroupIdList'])) {
            if (!empty($map['InstanceGroupIdList'])) {
                $model->instanceGroupIdList = [];
                $n1 = 0;
                foreach ($map['InstanceGroupIdList'] as $item1) {
                    $model->instanceGroupIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = [];
                $n1 = 0;
                foreach ($map['InstanceIdList'] as $item1) {
                    $model->instanceIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
