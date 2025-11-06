<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SubmitOperationAuditInfoRequest extends Model
{
    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @var int
     */
    public $auditType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'auditInfo' => 'AuditInfo',
        'auditType' => 'AuditType',
        'domainName' => 'DomainName',
        'id' => 'Id',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = $this->auditInfo;
        }

        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['AuditInfo'])) {
            $model->auditInfo = $map['AuditInfo'];
        }

        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
