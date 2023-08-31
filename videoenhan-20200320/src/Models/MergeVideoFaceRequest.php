<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class MergeVideoFaceRequest extends Model
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
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace-pic1.png
     *
     * @var string
     */
    public $referenceURL;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace1.mp4
     *
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'addWatermark' => 'AddWatermark',
        'enhance'      => 'Enhance',
        'referenceURL' => 'ReferenceURL',
        'videoURL'     => 'VideoURL',
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
        if (null !== $this->referenceURL) {
            $res['ReferenceURL'] = $this->referenceURL;
        }
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoFaceRequest
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
            $model->referenceURL = $map['ReferenceURL'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
