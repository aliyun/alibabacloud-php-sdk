<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class auditInfo extends Model
{
    /**
     * @example 2024-06-03 11:20:34
     *
     * @var string
     */
    public $auditDate;

    /**
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
