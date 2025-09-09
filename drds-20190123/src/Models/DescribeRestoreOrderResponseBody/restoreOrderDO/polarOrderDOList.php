<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\polarOrderDOList\polarOrderDOList;

class polarOrderDOList extends Model
{
    /**
     * @var polarOrderDOList[]
     */
    public $polarOrderDOList;
    protected $_name = [
        'polarOrderDOList' => 'PolarOrderDOList',
    ];

    public function validate()
    {
        if (\is_array($this->polarOrderDOList)) {
            Model::validateArray($this->polarOrderDOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polarOrderDOList) {
            if (\is_array($this->polarOrderDOList)) {
                $res['PolarOrderDOList'] = [];
                $n1 = 0;
                foreach ($this->polarOrderDOList as $item1) {
                    $res['PolarOrderDOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PolarOrderDOList'])) {
            if (!empty($map['PolarOrderDOList'])) {
                $model->polarOrderDOList = [];
                $n1 = 0;
                foreach ($map['PolarOrderDOList'] as $item1) {
                    $model->polarOrderDOList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
