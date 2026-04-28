<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class RevokeUserDeviceSessionRequest extends Model
{
    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $saseUserId;
    protected $_name = [
        'devTag' => 'DevTag',
        'saseUserId' => 'SaseUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
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
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        return $model;
    }
}
