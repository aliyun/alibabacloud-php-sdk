<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO;

use AlibabaCloud\Tea\Model;

class drdsOrderDOList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList\drdsOrderDOList[]
     */
    public $drdsOrderDOList;
    protected $_name = [
        'drdsOrderDOList' => 'DrdsOrderDOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsOrderDOList) {
            $res['DrdsOrderDOList'] = [];
            if (null !== $this->drdsOrderDOList && \is_array($this->drdsOrderDOList)) {
                $n = 0;
                foreach ($this->drdsOrderDOList as $item) {
                    $res['DrdsOrderDOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drdsOrderDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsOrderDOList'])) {
            if (!empty($map['DrdsOrderDOList'])) {
                $model->drdsOrderDOList = [];
                $n                      = 0;
                foreach ($map['DrdsOrderDOList'] as $item) {
                    $model->drdsOrderDOList[$n++] = null !== $item ? \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList\drdsOrderDOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
