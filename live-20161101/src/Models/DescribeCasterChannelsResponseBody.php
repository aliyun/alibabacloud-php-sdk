<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterChannelsResponseBody\channels;
use AlibabaCloud\Tea\Model;

class DescribeCasterChannelsResponseBody extends Model
{
    /**
     * @description The channels.
     *
     * @var channels
     */
    public $channels;

    /**
     * @description The request ID.
     *
     * @example 83C52866-281E-4AEA-9582-B124********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of channels.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'channels' => 'Channels',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterChannelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
