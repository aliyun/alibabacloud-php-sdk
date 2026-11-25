<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\AddDeviceBelongIdentifiersRequest;

use AlibabaCloud\Dara\Model;

class identifiers extends Model
{
    /**
     * @var string
     */
    public $identifierType;

    /**
     * @var string
     */
    public $identifierValue;
    protected $_name = [
        'identifierType' => 'IdentifierType',
        'identifierValue' => 'IdentifierValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifierType) {
            $res['IdentifierType'] = $this->identifierType;
        }

        if (null !== $this->identifierValue) {
            $res['IdentifierValue'] = $this->identifierValue;
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
        if (isset($map['IdentifierType'])) {
            $model->identifierType = $map['IdentifierType'];
        }

        if (isset($map['IdentifierValue'])) {
            $model->identifierValue = $map['IdentifierValue'];
        }

        return $model;
    }
}
