<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\extraParams;

use AlibabaCloud\Dara\Model;

class translationHotwordMap extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizUserId;
    protected $_name = [
        'bizType' => 'bizType',
        'bizUserId' => 'bizUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->bizUserId) {
            $res['bizUserId'] = $this->bizUserId;
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
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['bizUserId'])) {
            $model->bizUserId = $map['bizUserId'];
        }

        return $model;
    }
}
