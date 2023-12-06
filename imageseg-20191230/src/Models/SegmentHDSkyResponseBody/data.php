<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDSkyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/sky-segmentation-hd/res/1173F38F-B4F4-4A07-AB2E-D490C01347E5_0d56_20201027-061858.jpg?Expires=1603781339&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2F8%2Bj%2FWruWOMqDezwpnJOkcNJD****
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
