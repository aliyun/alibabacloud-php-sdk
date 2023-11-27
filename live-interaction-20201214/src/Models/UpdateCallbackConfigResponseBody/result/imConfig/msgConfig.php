<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody\result\imConfig;

use AlibabaCloud\Tea\Model;

class msgConfig extends Model
{
    /**
     * @example 12000
     *
     * @var int
     */
    public $msgRecallTimeInterval;
    protected $_name = [
        'msgRecallTimeInterval' => 'MsgRecallTimeInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgRecallTimeInterval) {
            $res['MsgRecallTimeInterval'] = $this->msgRecallTimeInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return msgConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MsgRecallTimeInterval'])) {
            $model->msgRecallTimeInterval = $map['MsgRecallTimeInterval'];
        }

        return $model;
    }
}
