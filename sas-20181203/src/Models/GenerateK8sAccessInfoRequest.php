<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GenerateK8sAccessInfoRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunYundunGatewayApiName;
    /**
     * @var string
     */
    public $aliyunYundunGatewayPopName;
    /**
     * @var string
     */
    public $aliyunYundunGatewayProjectName;
    /**
     * @var string
     */
    public $auditLogStore;
    /**
     * @var string
     */
    public $auditProject;
    /**
     * @var string
     */
    public $auditRegionId;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var int
     */
    public $expireDate;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'aliyunYundunGatewayApiName'     => 'AliyunYundunGatewayApiName',
        'aliyunYundunGatewayPopName'     => 'AliyunYundunGatewayPopName',
        'aliyunYundunGatewayProjectName' => 'AliyunYundunGatewayProjectName',
        'auditLogStore'                  => 'AuditLogStore',
        'auditProject'                   => 'AuditProject',
        'auditRegionId'                  => 'AuditRegionId',
        'clusterName'                    => 'ClusterName',
        'expireDate'                     => 'ExpireDate',
        'groupId'                        => 'GroupId',
        'vendor'                         => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunYundunGatewayApiName) {
            $res['AliyunYundunGatewayApiName'] = $this->aliyunYundunGatewayApiName;
        }

        if (null !== $this->aliyunYundunGatewayPopName) {
            $res['AliyunYundunGatewayPopName'] = $this->aliyunYundunGatewayPopName;
        }

        if (null !== $this->aliyunYundunGatewayProjectName) {
            $res['AliyunYundunGatewayProjectName'] = $this->aliyunYundunGatewayProjectName;
        }

        if (null !== $this->auditLogStore) {
            $res['AuditLogStore'] = $this->auditLogStore;
        }

        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }

        if (null !== $this->auditRegionId) {
            $res['AuditRegionId'] = $this->auditRegionId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AliyunYundunGatewayApiName'])) {
            $model->aliyunYundunGatewayApiName = $map['AliyunYundunGatewayApiName'];
        }

        if (isset($map['AliyunYundunGatewayPopName'])) {
            $model->aliyunYundunGatewayPopName = $map['AliyunYundunGatewayPopName'];
        }

        if (isset($map['AliyunYundunGatewayProjectName'])) {
            $model->aliyunYundunGatewayProjectName = $map['AliyunYundunGatewayProjectName'];
        }

        if (isset($map['AuditLogStore'])) {
            $model->auditLogStore = $map['AuditLogStore'];
        }

        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }

        if (isset($map['AuditRegionId'])) {
            $model->auditRegionId = $map['AuditRegionId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
