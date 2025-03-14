<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponseBody\customTemplate;
use AlibabaCloud\Tea\Model;

class GetCustomTemplateResponseBody extends Model
{
    /**
     * @description The template information.
     *
     * @var customTemplate
     */
    public $customTemplate;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customTemplate' => 'CustomTemplate',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
