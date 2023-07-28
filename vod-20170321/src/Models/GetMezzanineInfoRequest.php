<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMezzanineInfoRequest extends Model
{
    /**
     * @description The type of additional information. Separate multiple values with commas (,). By default, only the basic information is returned. Valid values:
     *
     *   **video**: video stream information
     *   **audio**: audio stream information
     *
     * @example video
     *
     * @var string
     */
    public $additionType;

    /**
     * @description The validity period of the mezzanine file URL. Unit: seconds. Default value: **1800**. Minimum value: **1**.
     *
     *   If the OutputType parameter is set to **cdn**:
     *
     *   The mezzanine file URL has a validity period only if URL signing is enabled. Otherwise, the mezzanine file URL is permanently valid.
     *   Minimum value: **1**.
     *   Maximum Value: unlimited.
     *   Default value: If you do not set this parameter, the default validity period that is specified in URL signing is used.
     *
     * <!---->
     *
     *   If the OutputType parameter is set to **oss**:
     *
     *   The mezzanine file URL has a validity period only if the permissions on the Object Storage Service (OSS) bucket are private. Otherwise, the mezzanine file URL is permanently valid.
     *   Minimum value: **1**.
     *   Maximum value: **2592000** (30 days). The maximum value is limited to reduce security risks of the origin.
     *   Default value: If you do not set this parameter, the default value is **3600**.
     *
     * @example 3600
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The type of the mezzanine file URL. Valid values:
     *
     * - **oss**: OSS URL
     * - **cdn** (default): Content Delivery Network (CDN) URL
     *
     * > If the mezzanine file is stored in a bucket of the in type, only an OSS URL is returned.
     * @example oss
     *
     * @var string
     */
    public $outputType;

    /**
     * @description The ID of the video.
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
