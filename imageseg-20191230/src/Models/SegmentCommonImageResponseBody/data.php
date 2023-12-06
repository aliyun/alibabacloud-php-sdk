<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentCommonImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_segmenter/2019-12-20/invi_segmenter_015768355410261076021_Z3t0fc.png?Expires=1577094741&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=pkaKK3VlfsTR2r%2BYycJzTVEEos****
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
