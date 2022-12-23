<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAttachedMediaInfoRequest extends Model
{
    /**
     * @description The validity period of the URL of the auxiliary media asset. Unit: seconds.
     * > *   If the OutputType parameter is set to **cdn**:
     * >     *   The URL of the auxiliary media asset has a validity period only if URL signing is enabled. Otherwise, the URL of the auxiliary media asset is permanently valid.
     * >     *   Minimum value: **1**.
     * >     *   Maximum value: unlimited.
     * >     *   Default value: If you do not set this parameter, the default validity period that is specified in URL signing is used.
     * > *   If the OutputType parameter is set to **oss**:
     * >     *   The URL of the auxiliary media asset has a validity period only if the permissions on the Object Storage Service (OSS) bucket are private. Otherwise, the URL of the auxiliary media asset is permanently valid.
     * >     *   Minimum value: **1**.
     * >     *   Maximum value: **2592000** (30 days). The maximum value is limited to reduce security risks of the origin.
     * >     *   Default value: If you do not set this parameter, the default value is **3600**.
     * @example 3600
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The ID of the auxiliary media asset. Separate multiple IDs with commas (,). A maximum of 20 IDs can be specified.
     *
     * @example eb1861d2c9a842340e989dd56****,0222e203cf80f9c22870a4d2c****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The type of the URL of the auxiliary media asset. Valid values:
     *   **oss**: OSS URL
     *   **cdn** (default): Content Delivery Network (CDN) URL
     *
     * @example oss
     *
     * @var string
     */
    public $outputType;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'mediaIds'    => 'MediaIds',
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
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAttachedMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
