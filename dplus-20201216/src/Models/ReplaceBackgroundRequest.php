<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class ReplaceBackgroundRequest extends Model
{
    /**
     * @description 返回的图片背景图片ID
     *
     * @var string
     */
    public $backgroundId;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $picBackgroundUrl;

    /**
     * @description 图片地址
     *
     * @var string
     */
    public $picUrl;
    protected $_name = [
        'backgroundId'     => 'BackgroundId',
        'num'              => 'Num',
        'picBackgroundUrl' => 'PicBackgroundUrl',
        'picUrl'           => 'PicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundId) {
            $res['BackgroundId'] = $this->backgroundId;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->picBackgroundUrl) {
            $res['PicBackgroundUrl'] = $this->picBackgroundUrl;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceBackgroundRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundId'])) {
            $model->backgroundId = $map['BackgroundId'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PicBackgroundUrl'])) {
            $model->picBackgroundUrl = $map['PicBackgroundUrl'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }

        return $model;
    }
}
