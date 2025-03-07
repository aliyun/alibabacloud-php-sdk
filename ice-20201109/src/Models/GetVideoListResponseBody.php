<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetVideoListResponseBody\mediaList;
use AlibabaCloud\Tea\Model;

class GetVideoListResponseBody extends Model
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
     * @description The information about the audio and video files.
     *
     * @var mediaList[]
     */
    public $mediaList;

    /**
     * @description The ID of the request.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The total number of audio and video files that meet the conditions.
     *
     * @example 163
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'      => 'Code',
        'mediaList' => 'MediaList',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'total'     => 'Total',
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
     * @return GetVideoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
