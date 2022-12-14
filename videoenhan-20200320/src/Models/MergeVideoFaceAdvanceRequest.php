<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoFaceAdvanceRequest extends Model
{
    /**
     * @example " "
     *
     * @var Stream
     */
    public $postURLObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace-pic1.png
     *
     * @var Stream
     */
    public $referenceURLObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace1.mp4
     *
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'postURLObject'      => 'PostURL',
        'referenceURLObject' => 'ReferenceURL',
        'videoURLObject'     => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postURLObject) {
            $res['PostURL'] = $this->postURLObject;
        }
        if (null !== $this->referenceURLObject) {
            $res['ReferenceURL'] = $this->referenceURLObject;
        }
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
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
        if (isset($map['PostURL'])) {
            $model->postURLObject = $map['PostURL'];
        }
        if (isset($map['ReferenceURL'])) {
            $model->referenceURLObject = $map['ReferenceURL'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
