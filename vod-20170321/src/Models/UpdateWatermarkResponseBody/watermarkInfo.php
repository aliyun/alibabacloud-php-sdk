<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkResponseBody;

use AlibabaCloud\Tea\Model;

class watermarkInfo extends Model
{
    /**
     * @description The name of the watermark. Only letters and digits are supported.
     *
     *   The name can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example 2018-11-06T08:03:17Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the request.
     *
     * @example https://outin-32****9f4b3e7.oss-cn-shanghai.aliyuncs.com/image/cover/E6C3448CC8B715E6F8A72EC6B-6-2.png?Expires=1541600583&OSSAccessKeyId=****&Signature=gmf1eYMoDVg%2BHQCb4UGozBW****
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The Object Storage Service (OSS) URL or Content Delivery Network (CDN) URL of the watermark file. A text watermark does not have a file URL.
     *
     * @example NotDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @description The time when the watermark was added. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example Text
     *
     * @var string
     */
    public $type;

    /**
     * @description Modifies a watermark.
     *
     * @example {"Width":"55","Height":"55","Dx":"9","Dy":"9","ReferPos":"BottonLeft","Type":"Image"}
     *
     * @var string
     */
    public $watermarkConfig;

    /**
     * @example 505e2e287ea*****ecfddd386d384
     *
     * @var string
     */
    public $watermarkId;
    protected $_name = [
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
