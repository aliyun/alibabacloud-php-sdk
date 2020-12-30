<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainConfigPageResponseBody\configList;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainConfigPageResponseBody\configList\instances\rules;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $instanceRemark;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'instanceRemark' => 'InstanceRemark',
        'instanceId'     => 'InstanceId',
        'rules'          => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRemark) {
            $res['InstanceRemark'] = $this->instanceRemark;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRemark'])) {
            $model->instanceRemark = $map['InstanceRemark'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
