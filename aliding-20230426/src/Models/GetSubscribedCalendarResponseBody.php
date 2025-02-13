<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSubscribedCalendarResponseBody\subscribeScope;

class GetSubscribedCalendarResponseBody extends Model
{
    /**
     * @var string
     */
    public $author;
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
     * @var string
     */
    public $requestId;
    /**
     * @var subscribeScope
     */
    public $subscribeScope;
    protected $_name = [
        'author'         => 'author',
        'calendarId'     => 'calendarId',
        'description'    => 'description',
        'managers'       => 'managers',
        'name'           => 'name',
        'requestId'      => 'requestId',
        'subscribeScope' => 'subscribeScope',
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
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }

        if (null !== $this->calendarId) {
            $res['calendarId'] = $this->calendarId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->managers) {
            if (\is_array($this->managers)) {
                $res['managers'] = [];
                $n1              = 0;
                foreach ($this->managers as $item1) {
                    $res['managers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->subscribeScope) {
            $res['subscribeScope'] = null !== $this->subscribeScope ? $this->subscribeScope->toArray($noStream) : $this->subscribeScope;
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
        if (isset($map['author'])) {
            $model->author = $map['author'];
        }

        if (isset($map['calendarId'])) {
            $model->calendarId = $map['calendarId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['managers'])) {
            if (!empty($map['managers'])) {
                $model->managers = [];
                $n1              = 0;
                foreach ($map['managers'] as $item1) {
                    $model->managers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['subscribeScope'])) {
            $model->subscribeScope = subscribeScope::fromMap($map['subscribeScope']);
        }

        return $model;
    }
}
