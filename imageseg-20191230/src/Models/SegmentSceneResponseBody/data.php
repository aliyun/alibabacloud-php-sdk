<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentSceneResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_skySegmentator/2020-7-24/invi_skySegmentator_015955807385661000002_WqJ99N.jpg?Expires=1595582538&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=sBP5bQCErDolM4QQG5%2B0HozNoO****
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'imageURL' => 'ImageURL',
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
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
