<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureByListResponseBody\data;

use AlibabaCloud\Tea\Model;

class picData extends Model
{
    /**
     * @example 1CJ0****e7qiq8VkQi1000000
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 1632453652222
     *
     * @var int
     */
    public $picCreateTime;

    /**
     * @example RW****HFRO****jUyMjIy
     *
     * @var string
     */
    public $picId;

    /**
     * @example https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEp****%3D
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEpDE****%2Cq_90
     *
     * @var string
     */
    public $thumbUrl;
    protected $_name = [
        'iotId'         => 'IotId',
        'picCreateTime' => 'PicCreateTime',
        'picId'         => 'PicId',
        'picUrl'        => 'PicUrl',
        'thumbUrl'      => 'ThumbUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->picCreateTime) {
            $res['PicCreateTime'] = $this->picCreateTime;
        }
        if (null !== $this->picId) {
            $res['PicId'] = $this->picId;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->thumbUrl) {
            $res['ThumbUrl'] = $this->thumbUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return picData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['PicCreateTime'])) {
            $model->picCreateTime = $map['PicCreateTime'];
        }
        if (isset($map['PicId'])) {
            $model->picId = $map['PicId'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['ThumbUrl'])) {
            $model->thumbUrl = $map['ThumbUrl'];
        }

        return $model;
    }
}
