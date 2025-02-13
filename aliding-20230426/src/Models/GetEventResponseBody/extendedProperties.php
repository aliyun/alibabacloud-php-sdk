<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\extendedProperties\sharedProperties;

class extendedProperties extends Model
{
    /**
     * @var sharedProperties
     */
    public $sharedProperties;
    protected $_name = [
        'sharedProperties' => 'SharedProperties',
    ];

    public function validate()
    {
        if (null !== $this->sharedProperties) {
            $this->sharedProperties->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sharedProperties) {
            $res['SharedProperties'] = null !== $this->sharedProperties ? $this->sharedProperties->toArray($noStream) : $this->sharedProperties;
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
        if (isset($map['SharedProperties'])) {
            $model->sharedProperties = sharedProperties::fromMap($map['SharedProperties']);
        }

        return $model;
    }
}
