<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateParameterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $propertiesShrink;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'owner' => 'Owner',
        'propertiesShrink' => 'Properties',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->propertiesShrink) {
            $res['Properties'] = $this->propertiesShrink;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Properties'])) {
            $model->propertiesShrink = $map['Properties'];
        }

        return $model;
    }
}
