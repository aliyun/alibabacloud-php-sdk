<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;

use AlibabaCloud\Tea\Model;

class onlineMeetingInfo extends Model
{
    /**
     * @example dingtalk
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineMeetingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
