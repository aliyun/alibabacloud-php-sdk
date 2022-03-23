<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetPageConfigResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetPageConfigResponseBody\result\adList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 广告位列表
     *
     * @var adList[]
     */
    public $adList;
    protected $_name = [
        'adList' => 'AdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adList) {
            $res['AdList'] = [];
            if (null !== $this->adList && \is_array($this->adList)) {
                $n = 0;
                foreach ($this->adList as $item) {
                    $res['AdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdList'])) {
            if (!empty($map['AdList'])) {
                $model->adList = [];
                $n             = 0;
                foreach ($map['AdList'] as $item) {
                    $model->adList[$n++] = null !== $item ? adList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
