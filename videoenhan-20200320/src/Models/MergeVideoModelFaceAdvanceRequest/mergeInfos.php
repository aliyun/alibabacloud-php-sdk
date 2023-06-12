<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceAdvanceRequest;

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

    /**
     * @var string
     */
    public $templateFaceURL;
    protected $_name = [
        'imageURL'        => 'ImageURL',
        'templateFaceID'  => 'TemplateFaceID',
        'templateFaceURL' => 'TemplateFaceURL',
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
        if (null !== $this->templateFaceURL) {
            $res['TemplateFaceURL'] = $this->templateFaceURL;
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
        if (isset($map['TemplateFaceURL'])) {
            $model->templateFaceURL = $map['TemplateFaceURL'];
        }

        return $model;
    }
}
