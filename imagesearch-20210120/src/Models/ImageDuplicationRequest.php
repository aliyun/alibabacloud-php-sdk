<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models;

use AlibabaCloud\Tea\Model;

class ImageDuplicationRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $picUrlList;

    /**
     * @var string
     */
    public $picNumList;

    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var int
     */
    public $imageWidth;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'picUrlList'   => 'PicUrlList',
        'picNumList'   => 'PicNumList',
        'imageHeight'  => 'ImageHeight',
        'imageWidth'   => 'ImageWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->picUrlList) {
            $res['PicUrlList'] = $this->picUrlList;
        }
        if (null !== $this->picNumList) {
            $res['PicNumList'] = $this->picNumList;
        }
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PicUrlList'])) {
            $model->picUrlList = $map['PicUrlList'];
        }
        if (isset($map['PicNumList'])) {
            $model->picNumList = $map['PicNumList'];
        }
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }

        return $model;
    }
}
