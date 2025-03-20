<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetImageInfosRequest extends Model
{
    /**
     * @description The time when the image URL expires. Unit: seconds.
     *
     *   If the OutputType parameter is set to cdn:
     *
     *   This parameter takes effect only if URL authentication is enabled. Otherwise, the image URL does not expire.
     *   Minimum value: 1.
     *   Maximum value: unlimited.
     *   Default value: The default validity period that is specified in URL authentication is used.
     *
     *   If the OutputType parameter is set to oss:
     *
     *   This parameter takes effect only when the ACL of the Object Storage Service (OSS) bucket is private. Otherwise, the image URL does not expire.
     *   Minimum value: 1.
     *   If you store the image in the VOD bucket, the maximum value of this parameter is **2592000** (30 days). If you store the image in an OSS bucket, the maximum value of this parameter is **129600** (36 hours). The maximum value is limited to reduce security risks of the origin.
     *   Default value: 3600.
     *
     * @example 3600
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The image IDs. Separate multiple IDs with commas (,). You can specify up to 20 image IDs. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/) and choose **Media Files > Images** in the left-side navigation pane.
     *   Obtain the value of ImageId from the response to the CreateUploadImage operation that you call to obtain the upload URL and credential.
     *   Obtain the value of ImageId from the response to the [SearchMedia](~~SearchMedia~~) operation after you upload images.
     *
     * This parameter is required.
     *
     * @example bbc65bba53fed90de118a7849****,594228cdd14b4d069fc17a8c4a****
     *
     * @var string
     */
    public $imageIds;

    /**
     * @description The type of the output image URL. Valid values:
     *
     *   oss: OSS URL
     *   cdn: CDN URL
     *
     * @example cdn
     *
     * @var string
     */
    public $outputType;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'imageIds' => 'ImageIds',
        'outputType' => 'OutputType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
