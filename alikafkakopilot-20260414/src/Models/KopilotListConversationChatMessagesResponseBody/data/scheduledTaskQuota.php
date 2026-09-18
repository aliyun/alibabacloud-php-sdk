<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class scheduledTaskQuota extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $remaining;

    /**
     * @var int
     */
    public $used;
    protected $_name = [
        'limit' => 'Limit',
        'remaining' => 'Remaining',
        'used' => 'Used',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->remaining) {
            $res['Remaining'] = $this->remaining;
        }

        if (null !== $this->used) {
            $res['Used'] = $this->used;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Remaining'])) {
            $model->remaining = $map['Remaining'];
        }

        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
