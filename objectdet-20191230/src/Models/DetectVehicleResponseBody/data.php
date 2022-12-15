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
     * @example 436
     *
     * @var int
     */
    public $height;

    /**
     * @example 612
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'detectObjectInfoList' => 'DetectObjectInfoList',
        'height'               => 'Height',
        'width'                => 'Width',
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
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
