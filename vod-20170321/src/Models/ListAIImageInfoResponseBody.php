<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIImageInfoResponseBody\AIImageInfoList;
use AlibabaCloud\Tea\Model;

class ListAIImageInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var AIImageInfoList[]
     */
    public $AIImageInfoList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'AIImageInfoList' => 'AIImageInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->AIImageInfoList) {
            $res['AIImageInfoList'] = [];
            if (null !== $this->AIImageInfoList && \is_array($this->AIImageInfoList)) {
                $n = 0;
                foreach ($this->AIImageInfoList as $item) {
                    $res['AIImageInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AIImageInfoList'])) {
            if (!empty($map['AIImageInfoList'])) {
                $model->AIImageInfoList = [];
                $n                      = 0;
                foreach ($map['AIImageInfoList'] as $item) {
                    $model->AIImageInfoList[$n++] = null !== $item ? AIImageInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
