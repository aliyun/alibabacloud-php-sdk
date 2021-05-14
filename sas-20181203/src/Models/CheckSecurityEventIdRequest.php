<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckSecurityEventIdRequest extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string[]
     */
    public $securityEventIds;
    protected $_name = [
        'uuid'             => 'Uuid',
        'securityEventIds' => 'SecurityEventIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSecurityEventIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = $map['SecurityEventIds'];
            }
        }

        return $model;
    }
}
