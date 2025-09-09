<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\polarOrderDOList;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\rdsOrderDOList;

class restoreOrderDO extends Model
{
    /**
     * @var drdsOrderDOList
     */
    public $drdsOrderDOList;

    /**
     * @var polarOrderDOList
     */
    public $polarOrderDOList;

    /**
     * @var rdsOrderDOList
     */
    public $rdsOrderDOList;
    protected $_name = [
        'drdsOrderDOList' => 'DrdsOrderDOList',
        'polarOrderDOList' => 'PolarOrderDOList',
        'rdsOrderDOList' => 'RdsOrderDOList',
    ];

    public function validate()
    {
        if (null !== $this->drdsOrderDOList) {
            $this->drdsOrderDOList->validate();
        }
        if (null !== $this->polarOrderDOList) {
            $this->polarOrderDOList->validate();
        }
        if (null !== $this->rdsOrderDOList) {
            $this->rdsOrderDOList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drdsOrderDOList) {
            $res['DrdsOrderDOList'] = null !== $this->drdsOrderDOList ? $this->drdsOrderDOList->toArray($noStream) : $this->drdsOrderDOList;
        }

        if (null !== $this->polarOrderDOList) {
            $res['PolarOrderDOList'] = null !== $this->polarOrderDOList ? $this->polarOrderDOList->toArray($noStream) : $this->polarOrderDOList;
        }

        if (null !== $this->rdsOrderDOList) {
            $res['RdsOrderDOList'] = null !== $this->rdsOrderDOList ? $this->rdsOrderDOList->toArray($noStream) : $this->rdsOrderDOList;
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
            $model->drdsOrderDOList = drdsOrderDOList::fromMap($map['DrdsOrderDOList']);
        }

        if (isset($map['PolarOrderDOList'])) {
            $model->polarOrderDOList = polarOrderDOList::fromMap($map['PolarOrderDOList']);
        }

        if (isset($map['RdsOrderDOList'])) {
            $model->rdsOrderDOList = rdsOrderDOList::fromMap($map['RdsOrderDOList']);
        }

        return $model;
    }
}
