<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class StartCasterSceneResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example CF60DB6A-7FD6-426E-9288-122CC1A52FA7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The streaming URL of the scene. It is used for playback, but not for stream relay.
     *
     * @example http://live/caster/example.org
     *
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'streamUrl' => 'StreamUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCasterSceneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
