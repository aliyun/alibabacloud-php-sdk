<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectIPCPedestrianRequest\URLList;
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
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'continueOnError' => 'ContinueOnError',
        'imageData'       => 'ImageData',
        'width'           => 'Width',
        'height'          => 'Height',
        'URLList'         => 'URLList',
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
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
