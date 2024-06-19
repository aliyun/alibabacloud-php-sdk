<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DeepfakeDetectRequest extends Model
{
    /**
     * @example /9j/4AAQSkZJRgABAQAASxxxxxxx
     *
     * @var string
     */
    public $faceBase64;

    /**
     * @example IMAGE
     *
     * @var string
     */
    public $faceInputType;

    /**
     * @example https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg
     *
     * @var string
     */
    public $faceUrl;

    /**
     * @example e0c34a77f5ac40a5aa5e6ed20c******
     *
     * @var string
     */
    public $outerOrderNo;
    protected $_name = [
        'faceBase64'    => 'FaceBase64',
        'faceInputType' => 'FaceInputType',
        'faceUrl'       => 'FaceUrl',
        'outerOrderNo'  => 'OuterOrderNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceBase64) {
            $res['FaceBase64'] = $this->faceBase64;
        }
        if (null !== $this->faceInputType) {
            $res['FaceInputType'] = $this->faceInputType;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeepfakeDetectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceBase64'])) {
            $model->faceBase64 = $map['FaceBase64'];
        }
        if (isset($map['FaceInputType'])) {
            $model->faceInputType = $map['FaceInputType'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }

        return $model;
    }
}
