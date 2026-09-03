<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetAttributePassingSettingResponseBody\attributePassingSetting;

class GetAttributePassingSettingResponseBody extends Model
{
    /**
     * @var attributePassingSetting
     */
    public $attributePassingSetting;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attributePassingSetting' => 'AttributePassingSetting',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->attributePassingSetting) {
            $this->attributePassingSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributePassingSetting) {
            $res['AttributePassingSetting'] = null !== $this->attributePassingSetting ? $this->attributePassingSetting->toArray($noStream) : $this->attributePassingSetting;
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
        if (isset($map['AttributePassingSetting'])) {
            $model->attributePassingSetting = attributePassingSetting::fromMap($map['AttributePassingSetting']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
