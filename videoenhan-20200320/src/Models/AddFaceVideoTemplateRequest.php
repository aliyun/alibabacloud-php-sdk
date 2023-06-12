<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class AddFaceVideoTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $videoScene;

    /**
     * @example http://invi-label.oss-cn-shanghai.aliyuncs.com/labl/temp/faceswap/test_for_api/xxxx.mp4
     *
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'videoScene' => 'VideoScene',
        'videoURL'   => 'VideoURL',
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
        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceVideoTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoScene'])) {
            $model->videoScene = $map['VideoScene'];
        }
        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
