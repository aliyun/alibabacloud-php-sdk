<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class GetCustomTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $customTemplate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $template;
    protected $_name = [
        'customTemplate' => 'CustomTemplate',
        'requestId'      => 'RequestId',
        'template'       => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTemplate) {
            $res['CustomTemplate'] = $this->customTemplate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
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
            $model->customTemplate = $map['CustomTemplate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
