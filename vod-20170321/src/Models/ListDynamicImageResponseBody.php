<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListDynamicImageResponseBody\dynamicImageList;
use AlibabaCloud\Tea\Model;

class ListDynamicImageResponseBody extends Model
{
    /**
     * @description The format of the animated sticker. Valid values: gif and webp.
     *
     * @var dynamicImageList[]
     */
    public $dynamicImageList;

    /**
     * @description The operation that you want to perform. Set the value to **ListDynamicImage**.
     *
     * @example 570189B6-572E-4953-13B4278EE0D8****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicImageList' => 'DynamicImageList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicImageList) {
            $res['DynamicImageList'] = [];
            if (null !== $this->dynamicImageList && \is_array($this->dynamicImageList)) {
                $n = 0;
                foreach ($this->dynamicImageList as $item) {
                    $res['DynamicImageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDynamicImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicImageList'])) {
            if (!empty($map['DynamicImageList'])) {
                $model->dynamicImageList = [];
                $n                       = 0;
                foreach ($map['DynamicImageList'] as $item) {
                    $model->dynamicImageList[$n++] = null !== $item ? dynamicImageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
