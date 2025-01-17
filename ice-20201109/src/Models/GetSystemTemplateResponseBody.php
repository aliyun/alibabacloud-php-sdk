<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateResponseBody\systemTemplate;

class GetSystemTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var systemTemplate
     */
    public $systemTemplate;
    protected $_name = [
        'requestId'      => 'RequestId',
        'systemTemplate' => 'SystemTemplate',
    ];

    public function validate()
    {
        if (null !== $this->systemTemplate) {
            $this->systemTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->systemTemplate) {
            $res['SystemTemplate'] = null !== $this->systemTemplate ? $this->systemTemplate->toArray($noStream) : $this->systemTemplate;
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

        if (isset($map['SystemTemplate'])) {
            $model->systemTemplate = systemTemplate::fromMap($map['SystemTemplate']);
        }

        return $model;
    }
}
