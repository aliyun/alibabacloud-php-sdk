<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersShrinkRequest;

use AlibabaCloud\Dara\Model;

class propertyFilterParam extends Model
{
    /**
     * @var int
     */
    public $propertyId;

    /**
     * @var string
     */
    public $propertyValueIds;
    protected $_name = [
        'propertyId' => 'PropertyId',
        'propertyValueIds' => 'PropertyValueIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }

        if (null !== $this->propertyValueIds) {
            $res['PropertyValueIds'] = $this->propertyValueIds;
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
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        if (isset($map['PropertyValueIds'])) {
            $model->propertyValueIds = $map['PropertyValueIds'];
        }

        return $model;
    }
}
