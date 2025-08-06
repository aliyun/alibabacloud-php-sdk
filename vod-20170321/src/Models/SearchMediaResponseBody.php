<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

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
        'mediaList' => 'MediaList',
        'requestId' => 'RequestId',
        'scrollToken' => 'ScrollToken',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->mediaList)) {
            Model::validateArray($this->mediaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaList) {
            if (\is_array($this->mediaList)) {
                $res['MediaList'] = [];
                $n1 = 0;
                foreach ($this->mediaList as $item1) {
                    $res['MediaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaList'])) {
            if (!empty($map['MediaList'])) {
                $model->mediaList = [];
                $n1 = 0;
                foreach ($map['MediaList'] as $item1) {
                    $model->mediaList[$n1] = mediaList::fromMap($item1);
                    ++$n1;
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
