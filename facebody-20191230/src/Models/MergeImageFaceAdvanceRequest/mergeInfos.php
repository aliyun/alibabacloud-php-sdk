<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceAdvanceRequest;

use AlibabaCloud\Tea\Model;

class mergeInfos extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
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
