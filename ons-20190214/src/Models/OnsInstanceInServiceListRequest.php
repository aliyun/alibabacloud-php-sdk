<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListRequest\tag;
use AlibabaCloud\Tea\Model;

class OnsInstanceInServiceListRequest extends Model
{
    /**
     * @var bool
     */
    public $needResourceInfo;

    /**
     * @description The list of tags that are attached to the instance. A maximum of 20 tags can be included in a list.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'needResourceInfo' => 'NeedResourceInfo',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needResourceInfo) {
            $res['NeedResourceInfo'] = $this->needResourceInfo;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsInstanceInServiceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedResourceInfo'])) {
            $model->needResourceInfo = $map['NeedResourceInfo'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
