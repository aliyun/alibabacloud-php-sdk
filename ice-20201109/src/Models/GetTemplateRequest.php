<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateRequest extends Model
{
    /**
     * @description 是否返回模板关联素材，1返回，默认0，不返回
     *
     * @var string
     */
    public $relatedMediaidFlag;

    /**
     * @description 模板Id
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'relatedMediaidFlag' => 'RelatedMediaidFlag',
        'templateId'         => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetTemplateRequest
     */
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
