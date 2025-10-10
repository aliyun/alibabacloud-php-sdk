<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCallbackMetaRequest\callback;

class ModifyCallbackMetaRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var callable
     */
    public $callback;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'appId' => 'AppId',
        'callback' => 'Callback',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        if (null !== $this->callback) {
            $this->callback->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->callback) {
            $res['Callback'] = null !== $this->callback ? $this->callback->toArray($noStream) : $this->callback;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Callback'])) {
            $model->callback = callback::fromMap($map['Callback']);
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
