<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSubscribedCalendarResponseBody\subscribeScope;
use AlibabaCloud\Tea\Model;

class GetSubscribedCalendarResponseBody extends Model
{
    /**
     * @example 012345
     *
     * @var string
     */
    public $author;

    /**
     * @example M5MjkxNDUxQHVzZXJzLmRpbmd0YWxrLmNv
     *
     * @var string
     */
    public $calendarId;

    /**
     * @example 中国传统日历
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $managers;

    /**
     * @example 中国传统日历
     *
     * @var string
     */
    public $name;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
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
    }

    public function toMap()
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
            $res['managers'] = $this->managers;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->subscribeScope) {
            $res['subscribeScope'] = null !== $this->subscribeScope ? $this->subscribeScope->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubscribedCalendarResponseBody
     */
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
                $model->managers = $map['managers'];
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
