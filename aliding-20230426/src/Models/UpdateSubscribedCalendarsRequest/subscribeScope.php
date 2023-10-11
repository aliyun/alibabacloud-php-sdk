<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateSubscribedCalendarsRequest;

use AlibabaCloud\Tea\Model;

class subscribeScope extends Model
{
    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscribeScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}
