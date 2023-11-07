<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SubmitOperationAuditInfoRequest extends Model
{
    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $auditType;

    /**
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'auditInfo'  => 'AuditInfo',
        'auditType'  => 'AuditType',
        'domainName' => 'DomainName',
        'id'         => 'Id',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SubmitOperationAuditInfoRequest
     */
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
