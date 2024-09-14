<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class GetAuditLogStatusResponseBody extends Model
{
    /**
     * @example enable
     *
     * @var string
     */
    public $auditLogStatus;

    /**
     * @example bucket-test
     *
     * @var string
     */
    public $auditOssBucket;

    /**
     * @example true
     *
     * @var bool
     */
    public $grantedServiceAccess;

    /**
     * @var string[]
     */
    public $ossBuckets;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 4C467B38-3910-447D-87BC-AC049166F216
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'auditLogStatus'       => 'AuditLogStatus',
        'auditOssBucket'       => 'AuditOssBucket',
        'grantedServiceAccess' => 'GrantedServiceAccess',
        'ossBuckets'           => 'OssBuckets',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditLogStatus) {
            $res['AuditLogStatus'] = $this->auditLogStatus;
        }
        if (null !== $this->auditOssBucket) {
            $res['AuditOssBucket'] = $this->auditOssBucket;
        }
        if (null !== $this->grantedServiceAccess) {
            $res['GrantedServiceAccess'] = $this->grantedServiceAccess;
        }
        if (null !== $this->ossBuckets) {
            $res['OssBuckets'] = $this->ossBuckets;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditLogStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditLogStatus'])) {
            $model->auditLogStatus = $map['AuditLogStatus'];
        }
        if (isset($map['AuditOssBucket'])) {
            $model->auditOssBucket = $map['AuditOssBucket'];
        }
        if (isset($map['GrantedServiceAccess'])) {
            $model->grantedServiceAccess = $map['GrantedServiceAccess'];
        }
        if (isset($map['OssBuckets'])) {
            if (!empty($map['OssBuckets'])) {
                $model->ossBuckets = $map['OssBuckets'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
