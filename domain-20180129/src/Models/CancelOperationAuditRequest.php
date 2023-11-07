<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CancelOperationAuditRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $auditRecordId;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'auditRecordId' => 'AuditRecordId',
        'lang'          => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditRecordId) {
            $res['AuditRecordId'] = $this->auditRecordId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelOperationAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRecordId'])) {
            $model->auditRecordId = $map['AuditRecordId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
