<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIImageInfoResponseBody\AIImageInfoList;
use AlibabaCloud\Tea\Model;

class ListAIImageInfoResponseBody extends Model
{
    /**
     * @var AIImageInfoList[]
     */
    public $AIImageInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIImageInfoList' => 'AIImageInfoList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIImageInfoList) {
            $res['AIImageInfoList'] = [];
            if (null !== $this->AIImageInfoList && \is_array($this->AIImageInfoList)) {
                $n = 0;
                foreach ($this->AIImageInfoList as $item) {
                    $res['AIImageInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAIImageInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIImageInfoList'])) {
            if (!empty($map['AIImageInfoList'])) {
                $model->AIImageInfoList = [];
                $n                      = 0;
                foreach ($map['AIImageInfoList'] as $item) {
                    $model->AIImageInfoList[$n++] = null !== $item ? AIImageInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
