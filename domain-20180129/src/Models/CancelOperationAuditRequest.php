<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CancelOperationAuditRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $auditRecordId;
    protected $_name = [
        'lang'          => 'Lang',
        'auditRecordId' => 'AuditRecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->auditRecordId) {
            $res['AuditRecordId'] = $this->auditRecordId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AuditRecordId'])) {
            $model->auditRecordId = $map['AuditRecordId'];
        }

        return $model;
    }
}
