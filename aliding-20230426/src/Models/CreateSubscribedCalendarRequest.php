<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarRequest\subscribeScope;
use AlibabaCloud\Tea\Model;

class CreateSubscribedCalendarRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $managers;

    /**
     * @var string
     */
    public $name;

    /**
     * @var subscribeScope
     */
    public $subscribeScope;
    protected $_name = [
        'description'    => 'Description',
        'managers'       => 'Managers',
        'name'           => 'Name',
        'subscribeScope' => 'SubscribeScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->managers) {
            $res['Managers'] = $this->managers;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subscribeScope) {
            $res['SubscribeScope'] = null !== $this->subscribeScope ? $this->subscribeScope->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscribedCalendarRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Managers'])) {
            if (!empty($map['Managers'])) {
                $model->managers = $map['Managers'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubscribeScope'])) {
            $model->subscribeScope = subscribeScope::fromMap($map['SubscribeScope']);
        }

        return $model;
    }
}
