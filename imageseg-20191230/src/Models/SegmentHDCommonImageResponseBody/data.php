<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDCommonImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_commoditysegmenter/2020-10-27/invi_commoditysegmenter_016037842193171000000_5pn2QM.png?Expires=1603786019&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=HwUztguGBYXmXGEmuTh%2FL3ztoh****
     *
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
