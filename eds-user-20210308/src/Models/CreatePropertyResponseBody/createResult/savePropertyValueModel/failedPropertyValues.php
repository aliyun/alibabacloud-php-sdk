<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody\createResult\savePropertyValueModel;

use AlibabaCloud\Dara\Model;

class failedPropertyValues extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $propertyId;

    /**
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'propertyId' => 'PropertyId',
        'propertyValue' => 'PropertyValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }

        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = $this->propertyValue;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        if (isset($map['PropertyValue'])) {
            $model->propertyValue = $map['PropertyValue'];
        }

        return $model;
    }
}
