<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMezzanineInfoRequest extends Model
{
    /**
     * @description The ID of the video.
     *
     * @example video
     *
     * @var string
     */
    public $additionType;

    /**
     * @description The type of the mezzanine file URL. Valid values:
     *
     * - **oss**: OSS URL
     * - **cdn** (default): CDN URL
     *
     * > If you specify an OSS URL for the video stream, the video stream must be in the MP4 format.
     * @example 3600
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The frame rate of the file. Unit: frames per second.
     *
     * @example oss
     *
     * @var string
     */
    public $outputType;

    /**
     * @description The operation that you want to perform. Set the value to **GetMezzanineInfo**.
     *
     * @example 1f1a6fc03ca04814031b8a6559e****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'additionType' => 'AdditionType',
        'authTimeout'  => 'AuthTimeout',
        'outputType'   => 'OutputType',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMezzanineInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
