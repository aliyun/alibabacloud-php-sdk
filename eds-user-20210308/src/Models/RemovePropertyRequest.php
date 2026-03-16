<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class RemovePropertyRequest extends Model
{
    /**
     * @var string
     */
    public $businessChannel;

    /**
     * @var int
     */
    public $propertyId;
    protected $_name = [
        'businessChannel' => 'BusinessChannel',
        'propertyId' => 'PropertyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessChannel) {
            $res['BusinessChannel'] = $this->businessChannel;
        }

        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
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
        if (isset($map['BusinessChannel'])) {
            $model->businessChannel = $map['BusinessChannel'];
        }

        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        return $model;
    }
}
