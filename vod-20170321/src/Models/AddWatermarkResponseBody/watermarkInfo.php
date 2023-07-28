<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\AddWatermarkResponseBody;

use AlibabaCloud\Tea\Model;

class watermarkInfo extends Model
{
    /**
     * @description The time when the watermark was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-07T09:05:52Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The OSS URL or Alibaba Cloud CDN URL of the watermark file. This parameter does not apply to text watermarks.
     *
     * @example https://outin-3262*****9f4b3e7.oss-cn-shanghai.aliyuncs.com/image/cover/E6C3448CC8B715E6F8A72EC6B-6-2.png?Expires=1541600583&OSSAccessKeyId=****&Signature=gmf1eYMoDVg%2BHQCb4UGozBW****
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description Indicates whether the default watermark was used. Valid values:
     *
     *   **Default**
     *   **NotDefault**
     *
     * @example NotDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description The name of the watermark.
     *
     * @example text watermark test
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the watermark. Valid values:
     *
     *   **Image** (default)
     *   **Text**
     *
     * @example Text
     *
     * @var string
     */
    public $type;

    /**
     * @description The configurations such as the position and effect of the text watermark or image watermark. The value is a JSON string.
     *
     * > The value of this parameter varies based on the watermark type. For more information about the data structure, see [WatermarkConfig](~~98618~~).
     * @example {"FontColor": "Blue","FontSize": 80, "Content": "watermark test" }
     *
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description The ID of the watermark.
     *
     * @example 9bcc8bfadb84*****109a2671d0df97
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
