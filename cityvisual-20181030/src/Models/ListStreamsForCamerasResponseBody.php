<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListStreamsForCamerasResponseBody\streams;
use AlibabaCloud\Tea\Model;

class ListStreamsForCamerasResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streams
     */
    public $streams;
    protected $_name = [
        'requestId' => 'RequestId',
        'streams'   => 'Streams',
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
        if (null !== $this->streams) {
            $res['Streams'] = null !== $this->streams ? $this->streams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStreamsForCamerasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Streams'])) {
            $model->streams = streams::fromMap($map['Streams']);
        }

        return $model;
    }
}
