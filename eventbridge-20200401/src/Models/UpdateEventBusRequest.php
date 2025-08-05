<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class UpdateEventBusRequest extends Model
{
    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event bus.
     *
     * This parameter is required.
     *
     * @example eventTest
     *
     * @var string
     */
    public $eventBusName;
    protected $_name = [
        'description' => 'Description',
        'eventBusName' => 'EventBusName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEventBusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        return $model;
    }
}
