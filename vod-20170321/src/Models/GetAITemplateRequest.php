<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAITemplateRequest extends Model
{
    /**
     * @description The ID of the AI template. You can use one of the following methods to obtain the ID:
     *
     *   Call the [AddAITemplate](https://help.aliyun.com/document_detail/102930.html) operation to add an AI template if no AI template exists. The value of TemplateId in the response is the ID of the AI template.
     *   Call the [ListAITemplate](https://help.aliyun.com/document_detail/102936.html) operation if the template already exists. The value of TemplateId in the response is the ID of the AI template.
     *
     * This parameter is required.
     * @example 1706a0063dd733f6a823ef32e0a5****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAITemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
