<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByFaceResponseBody\mediaInfoList;
use AlibabaCloud\Tea\Model;

class SearchMediaByFaceResponseBody extends Model
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
     * @description The media assets that meet the conditions.
     *
     * @var mediaInfoList[]
     */
    public $mediaInfoList;

    /**
     * @description The ID of the request.
     *
     * @example 7CA7D615-CFB1-5437-9A12-2D185C3EE6CB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values: true false
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The total number of data records that meet the specified filter condition.
     *
     * @example 163
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code' => 'Code',
        'mediaInfoList' => 'MediaInfoList',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->mediaInfoList) {
            $res['MediaInfoList'] = [];
            if (null !== $this->mediaInfoList && \is_array($this->mediaInfoList)) {
                $n = 0;
                foreach ($this->mediaInfoList as $item) {
                    $res['MediaInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return SearchMediaByFaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MediaInfoList'])) {
            if (!empty($map['MediaInfoList'])) {
                $model->mediaInfoList = [];
                $n = 0;
                foreach ($map['MediaInfoList'] as $item) {
                    $model->mediaInfoList[$n++] = null !== $item ? mediaInfoList::fromMap($item) : $item;
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
