<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryOperationAuditInfoDetailResponseBody extends Model
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
    public $auditStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $auditType;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @example 1581919010100
     *
     * @var int
     */
    public $createTime;

    /**
     * @example example.com,aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 9DFCF6F8-243C-40EC-8035-4B12FEFD7D1L
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1581919010101
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'auditInfo'    => 'AuditInfo',
        'auditStatus'  => 'AuditStatus',
        'auditType'    => 'AuditType',
        'businessName' => 'BusinessName',
        'createTime'   => 'CreateTime',
        'domainName'   => 'DomainName',
        'id'           => 'Id',
        'remark'       => 'Remark',
        'requestId'    => 'RequestId',
        'updateTime'   => 'UpdateTime',
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
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOperationAuditInfoDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditInfo'])) {
            $model->auditInfo = $map['AuditInfo'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
