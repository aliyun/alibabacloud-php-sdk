<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetImageInfoRequest extends Model
{
    /**
     * @description The validity period of the image URL. Unit: seconds.
     *
     * > *   If the OutputType parameter is set to **cdn**:
     * >     *   The image URL has a validity period only if URL signing is enabled. Otherwise, the image URL is permanently valid.
     * >     *   Minimum value: **1**.
     * >     *   Maximum value: unlimited.
     * >     *   Default value: If you do not set this parameter, the default validity period that is specified in URL signing is used.
     * > *   If the OutputType parameter is set to **oss**:
     * >     *   The image URL has a validity period only if the permissions on the Object Storage Service (OSS) bucket are private. Otherwise, the image URL is permanently valid.
     * >     *   Minimum value: **1**.
     * >     *   Maximum value: **2592000** (30 days). The maximum value is limited to reduce security risks of the origin.
     * >     *   Default value: If you do not set this parameter, the default value is **3600**.
     * @example 3600
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The ID of the image.
     *
     * @example 3e34733b40b9a96ccf5c1ff6f69****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image URL. Valid values:
     *
     *   **oss**: OSS URL
     *   **cdn** (default): Content Delivery Network (CDN) URL
     *
     * @example cdn
     *
     * @var string
     */
    public $outputType;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'imageId'     => 'ImageId',
        'outputType'  => 'OutputType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
