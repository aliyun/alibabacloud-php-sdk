<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class InitializeAutoShowListTaskResponseBody extends Model
{
    /**
     * @description The ID of the production studio.
     *
     * >  The value of this parameter can be used as the value of a request parameter to query the streaming URL of the production studio, start the production studio, add video resources to the production studio, add a production studio layout, query production studio layouts, add a production studio component, and add a production studio playlist.
     *
     * @example b4810848-bcf9-4aef-bd4a-e6bba2d9****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of output video streams.
     *
     *   videoFormat: the format of the streaming URL.
     *   outputStreamUrl: the source URL.
     *   transcodeConfig: the output resolution specified for video transcoding of the source URL.
     *
     * @example [{"videoFormat":"flv","outputStreamUrl":"http://example.aliyundoc.com","transcodeConfig":"original"}]
     *
     * @var string
     */
    public $streamList;
    protected $_name = [
        'casterId' => 'CasterId',
        'requestId' => 'RequestId',
        'streamList' => 'StreamList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamList) {
            $res['StreamList'] = $this->streamList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitializeAutoShowListTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamList'])) {
            $model->streamList = $map['StreamList'];
        }

        return $model;
    }
}
