<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponseBody\mediaClipList;
use AlibabaCloud\Tea\Model;

class SearchMediaClipByFaceResponseBody extends Model
{
    /**
     * @description The status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The media asset clips that meet the requirements.
     *
     * @var mediaClipList[]
     */
    public $mediaClipList;

    /**
     * @description The ID of the request.
     *
     * @example E44FFACD-9E90-555A-A09A-6FD3B7335E39
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values: true and false.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The total number of media asset clips that meet the conditions.
     *
     * @example 5
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'          => 'Code',
        'mediaClipList' => 'MediaClipList',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->mediaClipList) {
            $res['MediaClipList'] = [];
            if (null !== $this->mediaClipList && \is_array($this->mediaClipList)) {
                $n = 0;
                foreach ($this->mediaClipList as $item) {
                    $res['MediaClipList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaClipByFaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MediaClipList'])) {
            if (!empty($map['MediaClipList'])) {
                $model->mediaClipList = [];
                $n                    = 0;
                foreach ($map['MediaClipList'] as $item) {
                    $model->mediaClipList[$n++] = null !== $item ? mediaClipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
