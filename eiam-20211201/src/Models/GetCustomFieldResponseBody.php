<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomFieldResponseBody\customField;

class GetCustomFieldResponseBody extends Model
{
    /**
     * @var customField
     */
    public $customField;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customField' => 'CustomField',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->customField) {
            $this->customField->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customField) {
            $res['CustomField'] = null !== $this->customField ? $this->customField->toArray($noStream) : $this->customField;
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
        if (isset($map['CustomField'])) {
            $model->customField = customField::fromMap($map['CustomField']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
