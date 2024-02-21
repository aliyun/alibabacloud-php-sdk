<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class contactGroups extends Model
{
    /**
     * @description The members of the alert contact group.
     *
     * @example "[\"Mr. Zhang\",\"Ms. Wang\",\"Mr. Li\"]"
     *
     * @var string
     */
    public $contacts;

    /**
     * @description The description of the alert contact group.
     *
     * @example Default contact
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the alert contact group.
     *
     * @example Mr. Zhang
     *
     * @var string
     */
    public $name;

    /**
     * @description The user ID.
     *
     * @example 1088760496****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'contacts'    => 'contacts',
        'description' => 'description',
        'name'        => 'name',
        'userId'      => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contacts) {
            $res['contacts'] = $this->contacts;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contacts'])) {
            $model->contacts = $map['contacts'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
