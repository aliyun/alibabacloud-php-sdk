<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ReplaceBackgroundAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picUrlObject;

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
    protected $_name = [
        'picUrlObject'     => 'PicUrlObject',
        'backgroundId'     => 'BackgroundId',
        'num'              => 'Num',
        'picBackgroundUrl' => 'PicBackgroundUrl',
    ];

    public function validate()
    {
        Model::validateRequired('picUrlObject', $this->picUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrlObject) {
            $res['PicUrlObject'] = $this->picUrlObject;
        }
        if (null !== $this->backgroundId) {
            $res['BackgroundId'] = $this->backgroundId;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->picBackgroundUrl) {
            $res['PicBackgroundUrl'] = $this->picBackgroundUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceBackgroundAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrlObject'])) {
            $model->picUrlObject = $map['PicUrlObject'];
        }
        if (isset($map['BackgroundId'])) {
            $model->backgroundId = $map['BackgroundId'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PicBackgroundUrl'])) {
            $model->picBackgroundUrl = $map['PicBackgroundUrl'];
        }

        return $model;
    }
}
