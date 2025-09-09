<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\rdsOrderDOList\rdsOrderDOList;

class rdsOrderDOList extends Model
{
    /**
     * @var rdsOrderDOList[]
     */
    public $rdsOrderDOList;
    protected $_name = [
        'rdsOrderDOList' => 'RdsOrderDOList',
    ];

    public function validate()
    {
        if (\is_array($this->rdsOrderDOList)) {
            Model::validateArray($this->rdsOrderDOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rdsOrderDOList) {
            if (\is_array($this->rdsOrderDOList)) {
                $res['RdsOrderDOList'] = [];
                $n1 = 0;
                foreach ($this->rdsOrderDOList as $item1) {
                    $res['RdsOrderDOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RdsOrderDOList'])) {
            if (!empty($map['RdsOrderDOList'])) {
                $model->rdsOrderDOList = [];
                $n1 = 0;
                foreach ($map['RdsOrderDOList'] as $item1) {
                    $model->rdsOrderDOList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
