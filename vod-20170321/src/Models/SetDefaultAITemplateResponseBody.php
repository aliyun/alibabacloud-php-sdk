<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetDefaultAITemplateResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 8E70E3F8-E2EE-47BC-4677-379D6F28****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the AI template.
     *
     * @example 1706a0063dd733f6a823ef32e0a5****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDefaultAITemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
