<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events\event;

use AlibabaCloud\Tea\Model;

class msgParams extends Model
{
    /**
     * @var string[]
     */
    public $msgParam;
    protected $_name = [
        'msgParam' => 'MsgParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgParam) {
            $res['MsgParam'] = $this->msgParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return msgParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MsgParam'])) {
            if (!empty($map['MsgParam'])) {
                $model->msgParam = $map['MsgParam'];
            }
        }

        return $model;
    }
}
