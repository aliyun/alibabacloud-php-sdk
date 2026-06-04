<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateTableBusinessMetadataShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customAttributesShrink;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $readme;
    protected $_name = [
        'customAttributesShrink' => 'CustomAttributes',
        'id' => 'Id',
        'readme' => 'Readme',
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->readme) {
            $res['Readme'] = $this->readme;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Readme'])) {
            $model->readme = $map['Readme'];
        }

        return $model;
    }
}
