<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponseBody\updateResult\savePropertyValueModel;

use AlibabaCloud\Tea\Model;

class failedPropertyValues extends Model
{
    /**
     * @example ExistedPropertyValue
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The property value is used by another property.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 390
     *
     * @var int
     */
    public $propertyId;

    /**
     * @example testvalue
     *
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'propertyId'    => 'PropertyId',
        'propertyValue' => 'PropertyValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return failedPropertyValues
     */
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
