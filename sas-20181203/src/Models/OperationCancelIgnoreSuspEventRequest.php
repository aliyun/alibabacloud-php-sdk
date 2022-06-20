<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperationCancelIgnoreSuspEventRequest extends Model
{
    /**
     * @description 告警编号集合
     *
     * @var int[]
     */
    public $securityEventIds;
    protected $_name = [
        'securityEventIds' => 'SecurityEventIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperationCancelIgnoreSuspEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = $map['SecurityEventIds'];
            }
        }

        return $model;
    }
}
