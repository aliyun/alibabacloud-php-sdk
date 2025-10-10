<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates;

use AlibabaCloud\Dara\Model;

class backChannelConfig extends Model
{
    /**
     * @var bool
     */
    public $userTurnEnd;
    protected $_name = [
        'userTurnEnd' => 'UserTurnEnd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userTurnEnd) {
            $res['UserTurnEnd'] = $this->userTurnEnd;
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
        if (isset($map['UserTurnEnd'])) {
            $model->userTurnEnd = $map['UserTurnEnd'];
        }

        return $model;
    }
}
