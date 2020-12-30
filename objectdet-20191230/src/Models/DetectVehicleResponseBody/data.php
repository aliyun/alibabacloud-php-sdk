<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleResponseBody;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleResponseBody\data\detectObjectInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detectObjectInfoList[]
     */
    public $detectObjectInfoList;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;
    protected $_name = [
        'detectObjectInfoList' => 'DetectObjectInfoList',
        'width'                => 'Width',
        'height'               => 'Height',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectObjectInfoList) {
            $res['DetectObjectInfoList'] = [];
            if (null !== $this->detectObjectInfoList && \is_array($this->detectObjectInfoList)) {
                $n = 0;
                foreach ($this->detectObjectInfoList as $item) {
                    $res['DetectObjectInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectObjectInfoList'])) {
            if (!empty($map['DetectObjectInfoList'])) {
                $model->detectObjectInfoList = [];
                $n                           = 0;
                foreach ($map['DetectObjectInfoList'] as $item) {
                    $model->detectObjectInfoList[$n++] = null !== $item ? detectObjectInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
