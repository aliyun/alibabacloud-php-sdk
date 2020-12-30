<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\rdsOrderDOList\rdsOrderDOList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsOrderDOList) {
            $res['RdsOrderDOList'] = [];
            if (null !== $this->rdsOrderDOList && \is_array($this->rdsOrderDOList)) {
                $n = 0;
                foreach ($this->rdsOrderDOList as $item) {
                    $res['RdsOrderDOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsOrderDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsOrderDOList'])) {
            if (!empty($map['RdsOrderDOList'])) {
                $model->rdsOrderDOList = [];
                $n                     = 0;
                foreach ($map['RdsOrderDOList'] as $item) {
                    $model->rdsOrderDOList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
