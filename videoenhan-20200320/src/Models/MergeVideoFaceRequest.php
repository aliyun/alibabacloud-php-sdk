<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class MergeVideoFaceRequest extends Model
{
    /**
     * @example " "
     *
     * @var string
     */
    public $postURL;

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
        'postURL'      => 'PostURL',
        'referenceURL' => 'ReferenceURL',
        'videoURL'     => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postURL) {
            $res['PostURL'] = $this->postURL;
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
        if (isset($map['PostURL'])) {
            $model->postURL = $map['PostURL'];
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
