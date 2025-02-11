<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\taskInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\taskInfo\stepList\stepList;

class stepList extends Model
{
    /**
     * @var stepList[]
     */
    public $stepList;
    protected $_name = [
        'stepList' => 'StepList',
    ];

    public function validate()
    {
        if (\is_array($this->stepList)) {
            Model::validateArray($this->stepList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stepList) {
            if (\is_array($this->stepList)) {
                $res['StepList'] = [];
                $n1              = 0;
                foreach ($this->stepList as $item1) {
                    $res['StepList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StepList'])) {
            if (!empty($map['StepList'])) {
                $model->stepList = [];
                $n1              = 0;
                foreach ($map['StepList'] as $item1) {
                    $model->stepList[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
