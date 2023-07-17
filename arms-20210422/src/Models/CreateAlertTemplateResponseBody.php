<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertTemplateResponseBody\alertTemplate;
use AlibabaCloud\Tea\Model;

class CreateAlertTemplateResponseBody extends Model
{
    /**
     * @var alertTemplate
     */
    public $alertTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertTemplate' => 'AlertTemplate',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTemplate) {
            $res['AlertTemplate'] = null !== $this->alertTemplate ? $this->alertTemplate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlertTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTemplate'])) {
            $model->alertTemplate = alertTemplate::fromMap($map['AlertTemplate']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
