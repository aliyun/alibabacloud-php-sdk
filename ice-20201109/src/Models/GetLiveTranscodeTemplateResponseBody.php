<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponseBody\templateContent;

class GetLiveTranscodeTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var templateContent
     */
    public $templateContent;
    protected $_name = [
        'requestId'       => 'RequestId',
        'templateContent' => 'TemplateContent',
    ];

    public function validate()
    {
        if (null !== $this->templateContent) {
            $this->templateContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = null !== $this->templateContent ? $this->templateContent->toArray($noStream) : $this->templateContent;
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

        if (isset($map['TemplateContent'])) {
            $model->templateContent = templateContent::fromMap($map['TemplateContent']);
        }

        return $model;
    }
}
