<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetImageInfoRequest extends Model
{
    /**
     * @description The time when the image URL expires. Unit: seconds.
     *
     *   If you set OutputType to cdn:
     *
     *   This parameter takes effect only if URL authentication is enabled. Otherwise, the image URL does not expire.
     *   Minimum value: 1.
     *   Maximum value: unlimited.
     *   Default value: If you leave this parameter empty, the default validity period that is specified in URL signing is used.
     *
     *   If you set OutputType to oss:
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
     * @description The ID of the image. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/). In the left-side navigation pane, choose Media Files > Image. On the Image page, view the image ID.
     *   Obtain the image ID from the response to the [CreateUploadImage](~~CreateUploadImage~~) operation that you call to obtain the upload URL and credential.
     *   Obtain the image ID from the response to the [SearchMedia](~~SearchMedia~~) operation that you call to query the image.
     *
     * This parameter is required.
     *
     * @example 3e34733b40b9a96ccf5c1ff6f69****
     *
     * @var string
     */
    public $imageId;

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
        'imageId' => 'ImageId',
        'outputType' => 'OutputType',
    ];

    public function validate() {}

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
