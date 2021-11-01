<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVehicleICongestionShrinkRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $originRequestId;

    /**
     * @var string
     */
    public $preRegionIntersectFeaturesShrink;

    /**
     * @var string
     */
    public $roadRegionsShrink;

    /**
     * @var string
     */
    public $streamArn;
    protected $_name = [
        'imageURL'                         => 'ImageURL',
        'originRequestId'                  => 'OriginRequestId',
        'preRegionIntersectFeaturesShrink' => 'PreRegionIntersectFeatures',
        'roadRegionsShrink'                => 'RoadRegions',
        'streamArn'                        => 'StreamArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->originRequestId) {
            $res['OriginRequestId'] = $this->originRequestId;
        }
        if (null !== $this->preRegionIntersectFeaturesShrink) {
            $res['PreRegionIntersectFeatures'] = $this->preRegionIntersectFeaturesShrink;
        }
        if (null !== $this->roadRegionsShrink) {
            $res['RoadRegions'] = $this->roadRegionsShrink;
        }
        if (null !== $this->streamArn) {
            $res['StreamArn'] = $this->streamArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVehicleICongestionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['OriginRequestId'])) {
            $model->originRequestId = $map['OriginRequestId'];
        }
        if (isset($map['PreRegionIntersectFeatures'])) {
            $model->preRegionIntersectFeaturesShrink = $map['PreRegionIntersectFeatures'];
        }
        if (isset($map['RoadRegions'])) {
            $model->roadRegionsShrink = $map['RoadRegions'];
        }
        if (isset($map['StreamArn'])) {
            $model->streamArn = $map['StreamArn'];
        }

        return $model;
    }
}
