<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content\structView\parts;

use AlibabaCloud\Tea\Model;

class reasonPart extends Model
{
    /**
     * @example 123123
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'reason' => 'reason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reasonPart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
