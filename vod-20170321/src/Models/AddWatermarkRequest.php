<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddWatermarkRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The OSS URL or Content Delivery Network (CDN) URL of the watermark file. A text watermark does not have a file URL.
     *
     * @example http://outin-326268*****63e1403e7.oss-cn-shanghai.aliyuncs.com/image/cover/C99345*****E7FDEC-6-2.png
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The ID of the application. Default value: **app-1000000**. For more information, see [Overview](~~113600~~).
     *
     * @example The type of the watermark. Valid values:
     *
     *   **Image**: This is the default value.
     *   **Text**
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the watermark.
     *
     * @example Text
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the watermark was added. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example The Object Storage Service (OSS) URL of the watermark file. You must set this parameter if you add image watermarks.
     *
     * @var string
     */
    public $watermarkConfig;
    protected $_name = [
        'appId'           => 'AppId',
        'fileUrl'         => 'FileUrl',
        'name'            => 'Name',
        'type'            => 'Type',
        'watermarkConfig' => 'WatermarkConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }

        return $model;
    }
}
