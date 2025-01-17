<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $relatedMediaidFlag;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'relatedMediaidFlag' => 'RelatedMediaidFlag',
        'templateId'         => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedMediaidFlag) {
            $res['RelatedMediaidFlag'] = $this->relatedMediaidFlag;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['RelatedMediaidFlag'])) {
            $model->relatedMediaidFlag = $map['RelatedMediaidFlag'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
