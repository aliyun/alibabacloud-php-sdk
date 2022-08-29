<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponseBody\customTemplate;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTemplate) {
            $res['CustomTemplate'] = null !== $this->customTemplate ? $this->customTemplate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCustomTemplateResponseBody
     */
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
