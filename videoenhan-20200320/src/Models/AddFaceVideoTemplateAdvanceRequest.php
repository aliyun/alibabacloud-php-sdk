<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddFaceVideoTemplateAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $videoScene;

    /**
     * @description This parameter is required.
     *
     * @example http://invi-label.oss-cn-shanghai.aliyuncs.com/labl/temp/faceswap/test_for_api/xxxx.mp4
     *
     * @var Stream
     */
    public $videoURLObject;
    protected $_name = [
        'videoScene'     => 'VideoScene',
        'videoURLObject' => 'VideoURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoScene) {
            $res['VideoScene'] = $this->videoScene;
        }
        if (null !== $this->videoURLObject) {
            $res['VideoURL'] = $this->videoURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceVideoTemplateAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoScene'])) {
            $model->videoScene = $map['VideoScene'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURLObject = $map['VideoURL'];
        }

        return $model;
    }
}
