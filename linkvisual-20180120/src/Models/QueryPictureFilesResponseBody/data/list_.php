<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureFilesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var int
     */
    public $picCreateTime;

    /**
     * @var string
     */
    public $picId;

    /**
     * @var string
     */
    public $thumbUrl;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'picUrl'        => 'PicUrl',
        'picCreateTime' => 'PicCreateTime',
        'picId'         => 'PicId',
        'thumbUrl'      => 'ThumbUrl',
        'iotId'         => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->picCreateTime) {
            $res['PicCreateTime'] = $this->picCreateTime;
        }
        if (null !== $this->picId) {
            $res['PicId'] = $this->picId;
        }
        if (null !== $this->thumbUrl) {
            $res['ThumbUrl'] = $this->thumbUrl;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['PicCreateTime'])) {
            $model->picCreateTime = $map['PicCreateTime'];
        }
        if (isset($map['PicId'])) {
            $model->picId = $map['PicId'];
        }
        if (isset($map['ThumbUrl'])) {
            $model->thumbUrl = $map['ThumbUrl'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
