<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class CancelOperationAuditRequest extends Model
{
    /**
     * @var int
     */
    public $auditRecordId;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'auditRecordId' => 'AuditRecordId',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
