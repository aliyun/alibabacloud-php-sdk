<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class ChangeSkyRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ChangeSky/ChangeSky2.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageseg/ChangeSky/ChangeSky6.jpg
     *
     * @var string
     */
    public $replaceImageURL;
    protected $_name = [
        'imageURL'        => 'ImageURL',
        'replaceImageURL' => 'ReplaceImageURL',
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
        if (null !== $this->replaceImageURL) {
            $res['ReplaceImageURL'] = $this->replaceImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeSkyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['ReplaceImageURL'])) {
            $model->replaceImageURL = $map['ReplaceImageURL'];
        }

        return $model;
    }
}
