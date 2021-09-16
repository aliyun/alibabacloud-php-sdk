<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;
use AlibabaCloud\Tea\Model;

class SearchMediaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $scrollToken;

    /**
     * @var mediaList[]
     */
    public $mediaList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'total'       => 'Total',
        'scrollToken' => 'ScrollToken',
        'mediaList'   => 'MediaList',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }
        if (null !== $this->mediaList) {
            $res['MediaList'] = [];
            if (null !== $this->mediaList && \is_array($this->mediaList)) {
                $n = 0;
                foreach ($this->mediaList as $item) {
                    $res['MediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }
        if (isset($map['MediaList'])) {
            if (!empty($map['MediaList'])) {
                $model->mediaList = [];
                $n                = 0;
                foreach ($map['MediaList'] as $item) {
                    $model->mediaList[$n++] = null !== $item ? mediaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
