<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options;

use AlibabaCloud\Tea\Model;

class receiveScopeOption extends Model
{
    /**
     * @var string[]
     */
    public $excludeReceiverIds;

    /**
     * @example 0
     *
     * @var int
     */
    public $receiveScope;

    /**
     * @var string[]
     */
    public $receiverIds;
    protected $_name = [
        'excludeReceiverIds' => 'ExcludeReceiverIds',
        'receiveScope'       => 'ReceiveScope',
        'receiverIds'        => 'ReceiverIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeReceiverIds) {
            $res['ExcludeReceiverIds'] = $this->excludeReceiverIds;
        }
        if (null !== $this->receiveScope) {
            $res['ReceiveScope'] = $this->receiveScope;
        }
        if (null !== $this->receiverIds) {
            $res['ReceiverIds'] = $this->receiverIds;
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
        if (isset($map['ExcludeReceiverIds'])) {
            if (!empty($map['ExcludeReceiverIds'])) {
                $model->excludeReceiverIds = $map['ExcludeReceiverIds'];
            }
        }
        if (isset($map['ReceiveScope'])) {
            $model->receiveScope = $map['ReceiveScope'];
        }
        if (isset($map['ReceiverIds'])) {
            if (!empty($map['ReceiverIds'])) {
                $model->receiverIds = $map['ReceiverIds'];
            }
        }

        return $model;
    }
}
