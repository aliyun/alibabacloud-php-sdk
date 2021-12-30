<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AlivisionImgdupAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $picUrlObject;

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
    protected $_name = [
        'picUrlObject'   => 'PicUrlObject',
        'imageHeight'    => 'ImageHeight',
        'imageWidth'     => 'ImageWidth',
        'outputImageNum' => 'OutputImageNum',
        'picNum'         => 'PicNum',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlivisionImgdupAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrlObject'])) {
            $model->picUrlObject = $map['PicUrlObject'];
        }
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

        return $model;
    }
}
