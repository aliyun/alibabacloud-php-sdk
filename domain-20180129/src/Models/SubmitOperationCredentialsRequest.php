<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SubmitOperationCredentialsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $auditRecordId;

    /**
     * @var int
     */
    public $regType;

    /**
     * @var int
     */
    public $auditType;

    /**
     * @var string
     */
    public $credentials;
    protected $_name = [
        'lang'          => 'Lang',
        'auditRecordId' => 'AuditRecordId',
        'regType'       => 'RegType',
        'auditType'     => 'AuditType',
        'credentials'   => 'Credentials',
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
        if (null !== $this->regType) {
            $res['RegType'] = $this->regType;
        }
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }
        if (null !== $this->credentials) {
            $res['Credentials'] = $this->credentials;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AuditRecordId'])) {
            $model->auditRecordId = $map['AuditRecordId'];
        }
        if (isset($map['RegType'])) {
            $model->regType = $map['RegType'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }
        if (isset($map['Credentials'])) {
            $model->credentials = $map['Credentials'];
        }

        return $model;
    }
}
