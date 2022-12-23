<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkResponseBody;

use AlibabaCloud\Tea\Model;

class watermarkInfo extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the watermark was added. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-06T08:03:17Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The Object Storage Service (OSS) URL or Content Delivery Network (CDN) URL of the watermark file. A text watermark does not have a file URL.
     *
     * @example https://outin-32*****f4b3e7.oss-cn-shanghai.aliyuncs.com/image/cover/F85529C8B715E6F8A72EC6B-6-2.png?Expires=1541600583&OSSAccessKeyId=****&Signature=gmf1eYMoDVg%2BHQCb4UGozBW****
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description Indicates whether the watermark is the default one. Valid values:
     *
     *   **Default**: The watermark is the default one.
     *   **NotDefault**: The watermark is not the default one.
     *
     * @example NotDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description The name of the watermark.
     *
     * @example image watermark test
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the watermark. Valid values:
     *
     *   **Image**
     *   **Text**
     *
     * @example Text
     *
     * @var string
     */
    public $type;

    /**
     * @description The configurations such as the position and effect of the text watermark or image watermark. The value is a JSON-formatted string. For more information about the data structure, see the "WatermarkConfig" section of the [Media processing parameters](~~98618~~) topic.
     *
     * @example {"ReferPos": "BottomRight","Height": "55","Width": "55","Dx": "8","Dy": "8" }
     *
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description The ID of the watermark.
     *
     * @example 505e2e287ea*****ecfddd386d384
     *
     * @var string
     */
    public $watermarkId;
    protected $_name = [
        'appId'           => 'AppId',
        'creationTime'    => 'CreationTime',
        'fileUrl'         => 'FileUrl',
        'isDefault'       => 'IsDefault',
        'name'            => 'Name',
        'type'            => 'Type',
        'watermarkConfig' => 'WatermarkConfig',
        'watermarkId'     => 'WatermarkId',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermarkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
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
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        return $model;
    }
}
