<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarRequest;

use AlibabaCloud\Tea\Model;

class subscribeScope extends Model
{
    /**
     * @var string[]
     */
    public $corpIds;

    /**
     * @var string[]
     */
    public $openConversationIds;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'corpIds'             => 'CorpIds',
        'openConversationIds' => 'OpenConversationIds',
        'userIds'             => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIds) {
            $res['CorpIds'] = $this->corpIds;
        }
        if (null !== $this->openConversationIds) {
            $res['OpenConversationIds'] = $this->openConversationIds;
        }
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
        if (isset($map['CorpIds'])) {
            if (!empty($map['CorpIds'])) {
                $model->corpIds = $map['CorpIds'];
            }
        }
        if (isset($map['OpenConversationIds'])) {
            if (!empty($map['OpenConversationIds'])) {
                $model->openConversationIds = $map['OpenConversationIds'];
            }
        }
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = $map['UserIds'];
            }
        }

        return $model;
    }
}
