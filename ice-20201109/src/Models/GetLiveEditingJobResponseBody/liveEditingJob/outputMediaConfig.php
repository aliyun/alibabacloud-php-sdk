<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;

use AlibabaCloud\Tea\Model;

class outputMediaConfig extends Model
{
    /**
     * @description 输出成品的码率，单位为Kbps。可以不填，默认值是多个素材的最高码率
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description 当 OutputMediaTarget 的目标为 vod-media 时，指定 fileName(包含文件后缀，不含路径）作为输出文件名
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 输出成品的高。可以不填，默认值是多个素材的最大高
     *
     * @var int
     */
    public $height;

    /**
     * @description 输出成片的文件地址
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description 当 OutputMediaTarget 的目标为 vod-media 时， 指定 storage location 来存储媒资到 VOD; storage location 是 VOD 中的文件存储位置， 不包含 http:// 的前缀， 如:  outin-xxxxxx.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description 合成成片输出到vod，指定vod转码模板组。如不需要VOD转码，请填写 "VOD_NO_TRANSCODE".
     *
     * @var string
     */
    public $vodTemplateGroupId;

    /**
     * @description 输出成品的宽。可以不填，默认值是多个素材的最大宽
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'bitrate'            => 'Bitrate',
        'fileName'           => 'FileName',
        'height'             => 'Height',
        'mediaURL'           => 'MediaURL',
        'storageLocation'    => 'StorageLocation',
        'vodTemplateGroupId' => 'VodTemplateGroupId',
        'width'              => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->vodTemplateGroupId) {
            $res['VodTemplateGroupId'] = $this->vodTemplateGroupId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputMediaConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['VodTemplateGroupId'])) {
            $model->vodTemplateGroupId = $map['VodTemplateGroupId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
