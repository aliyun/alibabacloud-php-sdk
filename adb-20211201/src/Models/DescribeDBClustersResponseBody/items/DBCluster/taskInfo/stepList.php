<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponseBody\items\DBCluster\taskInfo;

use AlibabaCloud\Tea\Model;

class stepList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponseBody\items\DBCluster\taskInfo\stepList\stepList[]
     */
    public $stepList;
    protected $_name = [
        'stepList' => 'StepList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepList) {
            $res['StepList'] = [];
            if (null !== $this->stepList && \is_array($this->stepList)) {
                $n = 0;
                foreach ($this->stepList as $item) {
                    $res['StepList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepList'])) {
            if (!empty($map['StepList'])) {
                $model->stepList = [];
                $n               = 0;
                foreach ($map['StepList'] as $item) {
                    $model->stepList[$n++] = null !== $item ? \AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponseBody\items\DBCluster\taskInfo\stepList\stepList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
