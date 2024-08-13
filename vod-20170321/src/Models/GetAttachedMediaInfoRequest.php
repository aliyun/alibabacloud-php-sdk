<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAttachedMediaInfoRequest extends Model
{
    /**
     * @description The validity period of the URL. Unit: seconds.
     *
     *   If you set the OutputType parameter to **cdn**:
     *
     *   The URL of the auxiliary media asset has a validity period only if URL signing is enabled. Otherwise, the URL of the auxiliary media asset is permanently valid.
     *   Minimum value: **1**.
     *   Maximum value: unlimited.
     *   Default value: If you do not set this parameter, the default validity period that is specified in URL signing is used.
     *
     *   If you set the OutputType parameter to **oss**:
     *
     *   The URL of the auxiliary media asset has a validity period only if the permissions on the Object Storage Service (OSS) bucket are private. Otherwise, the URL of the auxiliary media asset is permanently valid.
     *   Minimum value: **1**.
     *   The maximum value for a media asset stored in the VOD bucket is **2592000** (30 days) and the maximum value for a media asset stored in an OSS bucket is **129600** (36 hours). The maximum value is limited to reduce security risks of the origin.
     *   Default value: If you do not set this parameter, the default value **3600** is used.
     *
     * @example 3600
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The ID of the auxiliary media asset.
     *
     *   Separate multiple IDs with commas (,). You can specify up to 20 IDs.
     *   You can obtain the ID from the response to the [CreateUploadAttachedMedia](~~CreateUploadAttachedMedia~~) operation that you call to obtain the upload URL and credential.
     *
     * This parameter is required.
     * @example eb1861d2c9a842340e989dd56****,0222e203cf80f9c22870a4d2c****
     *
     * @var string
     */
    public $mediaIds;

    /**
     * @description The type of the media asset URL. Valid values:
     *
     *   **oss**
     *   **cdn** (default)
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
