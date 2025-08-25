<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateResponseBody\date;

use AlibabaCloud\Dara\Model;

class faceInfos extends Model
{
    /**
     * @var string
     */
    public $templateFaceID;

    /**
     * @var string
     */
    public $templateFaceURL;
    protected $_name = [
        'templateFaceID' => 'TemplateFaceID',
        'templateFaceURL' => 'TemplateFaceURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateFaceID) {
            $res['TemplateFaceID'] = $this->templateFaceID;
        }

        if (null !== $this->templateFaceURL) {
            $res['TemplateFaceURL'] = $this->templateFaceURL;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateFaceID'])) {
            $model->templateFaceID = $map['TemplateFaceID'];
        }

        if (isset($map['TemplateFaceURL'])) {
            $model->templateFaceURL = $map['TemplateFaceURL'];
        }

        return $model;
    }
}
