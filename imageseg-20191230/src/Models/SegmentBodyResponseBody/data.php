<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentBodyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_humansegmenter/2021-3-31/invi_humansegmenter_016171823500001081370_Ej0WwO.jpg?Expires=1617184150&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ZwaWXpAOMzHar%2B1wVO7zeSD83r****
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
