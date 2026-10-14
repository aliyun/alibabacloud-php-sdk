<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKBSyncLinkAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var int
     */
    public $feishuChatMemberStaleTtlSeconds;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'feishuChatMemberStaleTtlSeconds' => 'FeishuChatMemberStaleTtlSeconds',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feishuChatMemberStaleTtlSeconds) {
            $res['FeishuChatMemberStaleTtlSeconds'] = $this->feishuChatMemberStaleTtlSeconds;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['FeishuChatMemberStaleTtlSeconds'])) {
            $model->feishuChatMemberStaleTtlSeconds = $map['FeishuChatMemberStaleTtlSeconds'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
