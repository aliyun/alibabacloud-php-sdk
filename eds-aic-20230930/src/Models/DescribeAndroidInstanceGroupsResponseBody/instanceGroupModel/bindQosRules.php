<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody\instanceGroupModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody\instanceGroupModel\bindQosRules\instanceQosRule;

class bindQosRules extends Model
{
    /**
     * @var instanceQosRule[]
     */
    public $instanceQosRule;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceQosRule' => 'InstanceQosRule',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceQosRule)) {
            Model::validateArray($this->instanceQosRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceQosRule) {
            if (\is_array($this->instanceQosRule)) {
                $res['InstanceQosRule'] = [];
                $n1 = 0;
                foreach ($this->instanceQosRule as $item1) {
                    $res['InstanceQosRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['InstanceQosRule'])) {
            if (!empty($map['InstanceQosRule'])) {
                $model->instanceQosRule = [];
                $n1 = 0;
                foreach ($map['InstanceQosRule'] as $item1) {
                    $model->instanceQosRule[$n1] = instanceQosRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
