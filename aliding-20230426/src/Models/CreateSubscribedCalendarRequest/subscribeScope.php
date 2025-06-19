<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarRequest;

use AlibabaCloud\Dara\Model;

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
        'corpIds' => 'CorpIds',
        'openConversationIds' => 'OpenConversationIds',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        if (\is_array($this->corpIds)) {
            Model::validateArray($this->corpIds);
        }
        if (\is_array($this->openConversationIds)) {
            Model::validateArray($this->openConversationIds);
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpIds) {
            if (\is_array($this->corpIds)) {
                $res['CorpIds'] = [];
                $n1 = 0;
                foreach ($this->corpIds as $item1) {
                    $res['CorpIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->openConversationIds) {
            if (\is_array($this->openConversationIds)) {
                $res['OpenConversationIds'] = [];
                $n1 = 0;
                foreach ($this->openConversationIds as $item1) {
                    $res['OpenConversationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CorpIds'])) {
            if (!empty($map['CorpIds'])) {
                $model->corpIds = [];
                $n1 = 0;
                foreach ($map['CorpIds'] as $item1) {
                    $model->corpIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OpenConversationIds'])) {
            if (!empty($map['OpenConversationIds'])) {
                $model->openConversationIds = [];
                $n1 = 0;
                foreach ($map['OpenConversationIds'] as $item1) {
                    $model->openConversationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
