<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponseBody\customTemplate;

class GetCustomTemplateResponseBody extends Model
{
    /**
     * @var customTemplate
     */
    public $customTemplate;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customTemplate' => 'CustomTemplate',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->customTemplate) {
            $this->customTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTemplate) {
            $res['CustomTemplate'] = null !== $this->customTemplate ? $this->customTemplate->toArray($noStream) : $this->customTemplate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CustomTemplate'])) {
            $model->customTemplate = customTemplate::fromMap($map['CustomTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
