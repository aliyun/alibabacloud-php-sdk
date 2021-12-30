<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class AlivisionImgdupRequest extends Model
{
    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var int
     */
    public $imageWidth;

    /**
     * @var int
     */
    public $outputImageNum;

    /**
     * @var int
     */
    public $picNum;

    /**
     * @var string
     */
    public $picUrl;
    protected $_name = [
        'imageHeight'    => 'ImageHeight',
        'imageWidth'     => 'ImageWidth',
        'outputImageNum' => 'OutputImageNum',
        'picNum'         => 'PicNum',
        'picUrl'         => 'PicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }
        if (null !== $this->outputImageNum) {
            $res['OutputImageNum'] = $this->outputImageNum;
        }
        if (null !== $this->picNum) {
            $res['PicNum'] = $this->picNum;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlivisionImgdupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }
        if (isset($map['OutputImageNum'])) {
            $model->outputImageNum = $map['OutputImageNum'];
        }
        if (isset($map['PicNum'])) {
            $model->picNum = $map['PicNum'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }

        return $model;
    }
}
