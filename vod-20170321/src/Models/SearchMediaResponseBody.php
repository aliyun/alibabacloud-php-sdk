<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;
use AlibabaCloud\Tea\Model;

class SearchMediaResponseBody extends Model
{
    /**
     * @var mediaList[]
     */
    public $mediaList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scrollToken;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'mediaList'   => 'MediaList',
        'requestId'   => 'RequestId',
        'scrollToken' => 'ScrollToken',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaList) {
            $res['MediaList'] = [];
            if (null !== $this->mediaList && \is_array($this->mediaList)) {
                $n = 0;
                foreach ($this->mediaList as $item) {
                    $res['MediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scrollToken) {
            $res['ScrollToken'] = $this->scrollToken;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['MediaList'])) {
            if (!empty($map['MediaList'])) {
                $model->mediaList = [];
                $n                = 0;
                foreach ($map['MediaList'] as $item) {
                    $model->mediaList[$n++] = null !== $item ? mediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScrollToken'])) {
            $model->scrollToken = $map['ScrollToken'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
