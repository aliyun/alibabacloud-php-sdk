<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\polarOrderDOList;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\rdsOrderDOList;
use AlibabaCloud\Tea\Model;

class restoreOrderDO extends Model
{
    /**
     * @var drdsOrderDOList
     */
    public $drdsOrderDOList;

    /**
     * @var rdsOrderDOList
     */
    public $rdsOrderDOList;

    /**
     * @var polarOrderDOList
     */
    public $polarOrderDOList;
    protected $_name = [
        'drdsOrderDOList'  => 'DrdsOrderDOList',
        'rdsOrderDOList'   => 'RdsOrderDOList',
        'polarOrderDOList' => 'PolarOrderDOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsOrderDOList) {
            $res['DrdsOrderDOList'] = null !== $this->drdsOrderDOList ? $this->drdsOrderDOList->toMap() : null;
        }
        if (null !== $this->rdsOrderDOList) {
            $res['RdsOrderDOList'] = null !== $this->rdsOrderDOList ? $this->rdsOrderDOList->toMap() : null;
        }
        if (null !== $this->polarOrderDOList) {
            $res['PolarOrderDOList'] = null !== $this->polarOrderDOList ? $this->polarOrderDOList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreOrderDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsOrderDOList'])) {
            $model->drdsOrderDOList = drdsOrderDOList::fromMap($map['DrdsOrderDOList']);
        }
        if (isset($map['RdsOrderDOList'])) {
            $model->rdsOrderDOList = rdsOrderDOList::fromMap($map['RdsOrderDOList']);
        }
        if (isset($map['PolarOrderDOList'])) {
            $model->polarOrderDOList = polarOrderDOList::fromMap($map['PolarOrderDOList']);
        }

        return $model;
    }
}
