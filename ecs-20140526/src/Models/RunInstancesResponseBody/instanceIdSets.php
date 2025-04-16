<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instanceIdSets extends Model
{
    /**
     * @var string[]
     */
    public $instanceIdSet;
    protected $_name = [
        'instanceIdSet' => 'InstanceIdSet',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIdSet)) {
            Model::validateArray($this->instanceIdSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIdSet) {
            if (\is_array($this->instanceIdSet)) {
                $res['InstanceIdSet'] = [];
                $n1 = 0;
                foreach ($this->instanceIdSet as $item1) {
                    $res['InstanceIdSet'][$n1++] = $item1;
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
        if (isset($map['InstanceIdSet'])) {
            if (!empty($map['InstanceIdSet'])) {
                $model->instanceIdSet = [];
                $n1 = 0;
                foreach ($map['InstanceIdSet'] as $item1) {
                    $model->instanceIdSet[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
