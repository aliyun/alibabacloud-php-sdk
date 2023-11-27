<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberRequest\requestParams\groupChatMembers;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $2$123456
     *
     * @var string
     */
    public $appCid;

    /**
     * @var groupChatMembers[]
     */
    public $groupChatMembers;
    protected $_name = [
        'appCid'           => 'AppCid',
        'groupChatMembers' => 'GroupChatMembers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->groupChatMembers) {
            $res['GroupChatMembers'] = [];
            if (null !== $this->groupChatMembers && \is_array($this->groupChatMembers)) {
                $n = 0;
                foreach ($this->groupChatMembers as $item) {
                    $res['GroupChatMembers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['GroupChatMembers'])) {
            if (!empty($map['GroupChatMembers'])) {
                $model->groupChatMembers = [];
                $n                       = 0;
                foreach ($map['GroupChatMembers'] as $item) {
                    $model->groupChatMembers[$n++] = null !== $item ? groupChatMembers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
