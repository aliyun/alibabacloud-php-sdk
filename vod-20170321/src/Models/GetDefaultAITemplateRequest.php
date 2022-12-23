<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetDefaultAITemplateRequest extends Model
{
    /**
     * @description The type of the AI template. Set the value to **AIMediaAudit**, which specifies intelligent review.
     *
     * @example AIMediaAudit
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDefaultAITemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
