<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data;

use AlibabaCloud\Dara\Model;

class bizProcesses extends Model
{
    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizProcessName;
    protected $_name = [
        'bizId' => 'BizId',
        'bizProcessName' => 'BizProcessName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->bizProcessName) {
            $res['BizProcessName'] = $this->bizProcessName;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BizProcessName'])) {
            $model->bizProcessName = $map['BizProcessName'];
        }

        return $model;
    }
}
