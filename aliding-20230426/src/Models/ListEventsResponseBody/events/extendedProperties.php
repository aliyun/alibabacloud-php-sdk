<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\extendedProperties\sharedProperties;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sharedProperties) {
            $res['SharedProperties'] = null !== $this->sharedProperties ? $this->sharedProperties->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendedProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SharedProperties'])) {
            $model->sharedProperties = sharedProperties::fromMap($map['SharedProperties']);
        }

        return $model;
    }
}
