<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options;

use AlibabaCloud\Tea\Model;

class receiveScopeOption extends Model
{
    /**
     * @description 接受者列表
     *
     * @var string[]
     */
    public $receiverIds;

    /**
     * @description 不接收者列表
     *
     * @var string[]
     */
    public $excludeReceiverIds;

    /**
     * @description 消息获取控制。0: 会话内除指定ExcludeReceivers均可获取；1: 会话内仅指定ReceiverIds可获取
     *
     * @var int
     */
    public $receiveScope;
    protected $_name = [
        'receiverIds'        => 'ReceiverIds',
        'excludeReceiverIds' => 'ExcludeReceiverIds',
        'receiveScope'       => 'ReceiveScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiverIds) {
            $res['ReceiverIds'] = $this->receiverIds;
        }
        if (null !== $this->excludeReceiverIds) {
            $res['ExcludeReceiverIds'] = $this->excludeReceiverIds;
        }
        if (null !== $this->receiveScope) {
            $res['ReceiveScope'] = $this->receiveScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receiveScopeOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiverIds'])) {
            if (!empty($map['ReceiverIds'])) {
                $model->receiverIds = $map['ReceiverIds'];
            }
        }
        if (isset($map['ExcludeReceiverIds'])) {
            if (!empty($map['ExcludeReceiverIds'])) {
                $model->excludeReceiverIds = $map['ExcludeReceiverIds'];
            }
        }
        if (isset($map['ReceiveScope'])) {
            $model->receiveScope = $map['ReceiveScope'];
        }

        return $model;
    }
}
