<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateAuditRangeRequest extends Model
{
    /**
     * @var string
     */
    public $auditRange;
    protected $_name = [
        'auditRange' => 'AuditRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditRange) {
            $res['AuditRange'] = $this->auditRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAuditRangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRange'])) {
            $model->auditRange = $map['AuditRange'];
        }

        return $model;
    }
}
