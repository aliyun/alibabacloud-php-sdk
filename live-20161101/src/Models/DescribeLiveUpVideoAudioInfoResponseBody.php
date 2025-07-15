<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems;
use AlibabaCloud\Tea\Model;

class DescribeLiveUpVideoAudioInfoResponseBody extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example BC858082-736F-4A25-867B-E5B67C85ACF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The request ID.
     *
     * @var upItems
     */
    public $upItems;
    protected $_name = [
        'requestId' => 'RequestId',
        'upItems' => 'UpItems',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->upItems) {
            $res['UpItems'] = null !== $this->upItems ? $this->upItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveUpVideoAudioInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpItems'])) {
            $model->upItems = upItems::fromMap($map['UpItems']);
        }

        return $model;
    }
}
