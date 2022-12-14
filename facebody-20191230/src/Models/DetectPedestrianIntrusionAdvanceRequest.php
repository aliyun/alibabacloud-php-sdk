<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest\detectRegion;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectPedestrianIntrusionAdvanceRequest extends Model
{
    /**
     * @var detectRegion[]
     */
    public $detectRegion;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectPedestrianIntrusion/DetectPedestrianIntrusion2.jpg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example rectangle
     *
     * @var string
     */
    public $regionType;
    protected $_name = [
        'detectRegion'   => 'DetectRegion',
        'imageURLObject' => 'ImageURL',
        'regionType'     => 'RegionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectRegion) {
            $res['DetectRegion'] = [];
            if (null !== $this->detectRegion && \is_array($this->detectRegion)) {
                $n = 0;
                foreach ($this->detectRegion as $item) {
                    $res['DetectRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->regionType) {
            $res['RegionType'] = $this->regionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectPedestrianIntrusionAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectRegion'])) {
            if (!empty($map['DetectRegion'])) {
                $model->detectRegion = [];
                $n                   = 0;
                foreach ($map['DetectRegion'] as $item) {
                    $model->detectRegion[$n++] = null !== $item ? detectRegion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }

        return $model;
    }
}
