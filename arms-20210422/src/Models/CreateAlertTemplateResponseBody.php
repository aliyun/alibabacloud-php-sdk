<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\CreateAlertTemplateResponseBody\alertTemplate;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->alertTemplate) {
            $this->alertTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTemplate) {
            $res['AlertTemplate'] = null !== $this->alertTemplate ? $this->alertTemplate->toArray($noStream) : $this->alertTemplate;
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
        if (isset($map['AlertTemplate'])) {
            $model->alertTemplate = alertTemplate::fromMap($map['AlertTemplate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
