<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAITemplateResponseBody\templateInfo;
use AlibabaCloud\Tea\Model;

class GetAITemplateResponseBody extends Model
{
    /**
     * @description The information about the AI template.
     *
     * @example 080DA371-8AC0-4CD4-4476-33E64282****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the AI template.
     *
     * @var templateInfo
     */
    public $templateInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'templateInfo' => 'TemplateInfo',
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
        if (null !== $this->templateInfo) {
            $res['TemplateInfo'] = null !== $this->templateInfo ? $this->templateInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAITemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateInfo'])) {
            $model->templateInfo = templateInfo::fromMap($map['TemplateInfo']);
        }

        return $model;
    }
}
