<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList\drdsOrderDOList;

class drdsOrderDOList extends Model
{
    /**
     * @var drdsOrderDOList[]
     */
    public $drdsOrderDOList;
    protected $_name = [
        'drdsOrderDOList' => 'DrdsOrderDOList',
    ];

    public function validate()
    {
        if (\is_array($this->drdsOrderDOList)) {
            Model::validateArray($this->drdsOrderDOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drdsOrderDOList) {
            if (\is_array($this->drdsOrderDOList)) {
                $res['DrdsOrderDOList'] = [];
                $n1 = 0;
                foreach ($this->drdsOrderDOList as $item1) {
                    $res['DrdsOrderDOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DrdsOrderDOList'])) {
            if (!empty($map['DrdsOrderDOList'])) {
                $model->drdsOrderDOList = [];
                $n1 = 0;
                foreach ($map['DrdsOrderDOList'] as $item1) {
                    $model->drdsOrderDOList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
