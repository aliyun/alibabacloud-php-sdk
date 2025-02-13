<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateSubscribedCalendarsRequest\subscribeScope;

class UpdateSubscribedCalendarsRequest extends Model
{
    /**
     * @var string
     */
    public $calendarId;
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
        'calendarId'     => 'CalendarId',
        'description'    => 'Description',
        'managers'       => 'Managers',
        'name'           => 'Name',
        'subscribeScope' => 'SubscribeScope',
    ];

    public function validate()
    {
        if (\is_array($this->managers)) {
            Model::validateArray($this->managers);
        }
        if (null !== $this->subscribeScope) {
            $this->subscribeScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->managers) {
            if (\is_array($this->managers)) {
                $res['Managers'] = [];
                $n1              = 0;
                foreach ($this->managers as $item1) {
                    $res['Managers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subscribeScope) {
            $res['SubscribeScope'] = null !== $this->subscribeScope ? $this->subscribeScope->toArray($noStream) : $this->subscribeScope;
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
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Managers'])) {
            if (!empty($map['Managers'])) {
                $model->managers = [];
                $n1              = 0;
                foreach ($map['Managers'] as $item1) {
                    $model->managers[$n1++] = $item1;
                }
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
