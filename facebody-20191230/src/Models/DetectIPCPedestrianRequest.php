<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectIPCPedestrianRequest extends Model
{
    /**
     * @var bool
     */
    public $continueOnError;

    /**
     * @var string
     */
    public $imageData;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $dataId;
    protected $_name = [
        'continueOnError' => 'ContinueOnError',
        'imageData'       => 'ImageData',
        'width'           => 'Width',
        'height'          => 'Height',
        'imageURL'        => 'ImageURL',
        'dataId'          => 'DataId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continueOnError) {
            $res['ContinueOnError'] = $this->continueOnError;
        }
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectIPCPedestrianRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContinueOnError'])) {
            $model->continueOnError = $map['ContinueOnError'];
        }
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        return $model;
    }
}
