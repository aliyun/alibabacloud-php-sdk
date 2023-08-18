<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceRequest;

use AlibabaCloud\Tea\Model;

class mergeInfos extends Model
{
    /**
     * @example http://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/ref/ref.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example 6cd509ea-54fa-4730-8e9d-c94cadcda048_0
     *
     * @var string
     */
    public $templateFaceID;
    protected $_name = [
        'imageURL'       => 'ImageURL',
        'templateFaceID' => 'TemplateFaceID',
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
        if (null !== $this->templateFaceID) {
            $res['TemplateFaceID'] = $this->templateFaceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mergeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['TemplateFaceID'])) {
            $model->templateFaceID = $map['TemplateFaceID'];
        }

        return $model;
    }
}
