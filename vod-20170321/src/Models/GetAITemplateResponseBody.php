<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAITemplateResponseBody\templateInfo;

class GetAITemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var templateInfo
     */
    public $templateInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'templateInfo' => 'TemplateInfo',
    ];

    public function validate()
    {
        if (null !== $this->templateInfo) {
            $this->templateInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateInfo) {
            $res['TemplateInfo'] = null !== $this->templateInfo ? $this->templateInfo->toArray($noStream) : $this->templateInfo;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TemplateInfo'])) {
            $model->templateInfo = templateInfo::fromMap($map['TemplateInfo']);
        }

        return $model;
    }
}
