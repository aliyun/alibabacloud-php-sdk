<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoFaceAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $addWatermark;

    /**
     * @var bool
     */
    public $enhance;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace-pic1.png
     *
     * @var Stream
     */
    public $referenceURLObject;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace1.mp4
     *
     * @var Stream
     */
    public $videoURLObject;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'addWatermark'       => 'AddWatermark',
        'enhance'            => 'Enhance',
        'referenceURLObject' => 'ReferenceURL',
        'videoURLObject'     => 'VideoURL',
        'watermarkType'      => 'WatermarkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addWatermark) {
            $res['AddWatermark'] = $this->addWatermark;
        }
        if (null !== $this->enhance) {
            $res['Enhance'] = $this->enhance;
        }
        if (null !== $this->referenceURLObject) {
            $res['ReferenceURL'] = $this->referenceURLObject;
        }
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }
        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddWatermark'])) {
            $model->addWatermark = $map['AddWatermark'];
        }
        if (isset($map['Enhance'])) {
            $model->enhance = $map['Enhance'];
        }
        if (isset($map['ReferenceURL'])) {
            $model->referenceURLObject = $map['ReferenceURL'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }
        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}
