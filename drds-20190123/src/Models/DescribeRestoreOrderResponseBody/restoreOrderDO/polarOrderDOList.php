<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\polarOrderDOList\polarOrderDOList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->polarOrderDOList) {
            $res['PolarOrderDOList'] = [];
            if (null !== $this->polarOrderDOList && \is_array($this->polarOrderDOList)) {
                $n = 0;
                foreach ($this->polarOrderDOList as $item) {
                    $res['PolarOrderDOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return polarOrderDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolarOrderDOList'])) {
            if (!empty($map['PolarOrderDOList'])) {
                $model->polarOrderDOList = [];
                $n                       = 0;
                foreach ($map['PolarOrderDOList'] as $item) {
                    $model->polarOrderDOList[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
