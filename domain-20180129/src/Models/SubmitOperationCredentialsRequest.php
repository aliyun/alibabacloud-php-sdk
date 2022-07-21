<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SubmitOperationCredentialsRequest extends Model
{
    /**
     * @var int
     */
    public $auditRecordId;

    /**
     * @var int
     */
    public $auditType;

    /**
     * @var string
     */
    public $credentials;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $regType;
    protected $_name = [
        'auditRecordId' => 'AuditRecordId',
        'auditType'     => 'AuditType',
        'credentials'   => 'Credentials',
        'lang'          => 'Lang',
        'regType'       => 'RegType',
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
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }
        if (null !== $this->credentials) {
            $res['Credentials'] = $this->credentials;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regType) {
            $res['RegType'] = $this->regType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitOperationCredentialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRecordId'])) {
            $model->auditRecordId = $map['AuditRecordId'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }
        if (isset($map['Credentials'])) {
            $model->credentials = $map['Credentials'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegType'])) {
            $model->regType = $map['RegType'];
        }

        return $model;
    }
}
