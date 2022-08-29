<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos;
use AlibabaCloud\Tea\Model;

class SearchPublicMediaInfoResponseBody extends Model
{
    /**
     * @var publicMediaInfos[]
     */
    public $publicMediaInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'publicMediaInfos' => 'PublicMediaInfos',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicMediaInfos) {
            $res['PublicMediaInfos'] = [];
            if (null !== $this->publicMediaInfos && \is_array($this->publicMediaInfos)) {
                $n = 0;
                foreach ($this->publicMediaInfos as $item) {
                    $res['PublicMediaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPublicMediaInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicMediaInfos'])) {
            if (!empty($map['PublicMediaInfos'])) {
                $model->publicMediaInfos = [];
                $n                       = 0;
                foreach ($map['PublicMediaInfos'] as $item) {
                    $model->publicMediaInfos[$n++] = null !== $item ? publicMediaInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
