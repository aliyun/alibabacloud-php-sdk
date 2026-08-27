<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate;

class GetServiceLinkedRoleTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceLinkedRoleTemplate
     */
    public $serviceLinkedRoleTemplate;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceLinkedRoleTemplate' => 'ServiceLinkedRoleTemplate',
    ];

    public function validate()
    {
        if (null !== $this->serviceLinkedRoleTemplate) {
            $this->serviceLinkedRoleTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceLinkedRoleTemplate) {
            $res['ServiceLinkedRoleTemplate'] = null !== $this->serviceLinkedRoleTemplate ? $this->serviceLinkedRoleTemplate->toArray($noStream) : $this->serviceLinkedRoleTemplate;
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

        if (isset($map['ServiceLinkedRoleTemplate'])) {
            $model->serviceLinkedRoleTemplate = serviceLinkedRoleTemplate::fromMap($map['ServiceLinkedRoleTemplate']);
        }

        return $model;
    }
}
