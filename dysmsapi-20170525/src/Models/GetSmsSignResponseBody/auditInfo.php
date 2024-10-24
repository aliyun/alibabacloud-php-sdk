<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsSignResponseBody;

use AlibabaCloud\Tea\Model;

class auditInfo extends Model
{
    /**
     * @description Audit date and time.
     *
     * @example 2024-06-03 12:02:34
     *
     * @var string
     */
    public $auditDate;

    /**
     * @description Reasons for not passing the review.
     *
     * @example reason for rejection.
     *
     * @var string
     */
    public $rejectInfo;
    protected $_name = [
        'auditDate'  => 'AuditDate',
        'rejectInfo' => 'RejectInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditDate) {
            $res['AuditDate'] = $this->auditDate;
        }
        if (null !== $this->rejectInfo) {
            $res['RejectInfo'] = $this->rejectInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditDate'])) {
            $model->auditDate = $map['AuditDate'];
        }
        if (isset($map['RejectInfo'])) {
            $model->rejectInfo = $map['RejectInfo'];
        }

        return $model;
    }
}
