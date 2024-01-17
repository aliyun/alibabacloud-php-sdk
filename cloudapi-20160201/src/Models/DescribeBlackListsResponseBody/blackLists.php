<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeBlackListsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeBlackListsResponseBody\blackLists\blackList;
use AlibabaCloud\Tea\Model;

class blackLists extends Model
{
    /**
     * @var blackList[]
     */
    public $blackList;
    protected $_name = [
        'blackList' => 'BlackList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackList) {
            $res['BlackList'] = [];
            if (null !== $this->blackList && \is_array($this->blackList)) {
                $n = 0;
                foreach ($this->blackList as $item) {
                    $res['BlackList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blackLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = [];
                $n                = 0;
                foreach ($map['BlackList'] as $item) {
                    $model->blackList[$n++] = null !== $item ? blackList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
