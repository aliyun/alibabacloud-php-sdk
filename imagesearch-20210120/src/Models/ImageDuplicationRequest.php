<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;

class ImageDuplicationRequest extends Model
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
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $outputImageNum;

    /**
     * @var string
     */
    public $picNumList;

    /**
     * @var string
     */
    public $picUrlList;
    protected $_name = [
        'imageHeight'    => 'ImageHeight',
        'imageWidth'     => 'ImageWidth',
        'instanceName'   => 'InstanceName',
        'outputImageNum' => 'OutputImageNum',
        'picNumList'     => 'PicNumList',
        'picUrlList'     => 'PicUrlList',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->outputImageNum) {
            $res['OutputImageNum'] = $this->outputImageNum;
        }
        if (null !== $this->picNumList) {
            $res['PicNumList'] = $this->picNumList;
        }
        if (null !== $this->picUrlList) {
            $res['PicUrlList'] = $this->picUrlList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageDuplicationRequest
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['OutputImageNum'])) {
            $model->outputImageNum = $map['OutputImageNum'];
        }
        if (isset($map['PicNumList'])) {
            $model->picNumList = $map['PicNumList'];
        }
        if (isset($map['PicUrlList'])) {
            $model->picUrlList = $map['PicUrlList'];
        }

        return $model;
    }
}
