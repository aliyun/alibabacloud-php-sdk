<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateColumnBusinessMetadataShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customAttributesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'customAttributesShrink' => 'CustomAttributes',
        'description' => 'Description',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAttributesShrink) {
            $res['CustomAttributes'] = $this->customAttributesShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['CustomAttributes'])) {
            $model->customAttributesShrink = $map['CustomAttributes'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
