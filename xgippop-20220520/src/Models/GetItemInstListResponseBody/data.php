<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetItemInstListResponseBody;

use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetItemInstListResponseBody\data\list_;
use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetItemInstListResponseBody\data\pageInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'list'     => 'List',
        'pageInfo' => 'PageInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        return $model;
    }
}
