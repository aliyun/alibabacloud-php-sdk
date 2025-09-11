<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class GetAuditLogStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $auditLogStatus;

    /**
     * @var string
     */
    public $auditOssBucket;

    /**
     * @var bool
     */
    public $grantedServiceAccess;

    /**
     * @var string[]
     */
    public $ossBuckets;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'auditLogStatus' => 'AuditLogStatus',
        'auditOssBucket' => 'AuditOssBucket',
        'grantedServiceAccess' => 'GrantedServiceAccess',
        'ossBuckets' => 'OssBuckets',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->ossBuckets)) {
            Model::validateArray($this->ossBuckets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ossBuckets)) {
                $res['OssBuckets'] = [];
                $n1 = 0;
                foreach ($this->ossBuckets as $item1) {
                    $res['OssBuckets'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->ossBuckets = [];
                $n1 = 0;
                foreach ($map['OssBuckets'] as $item1) {
                    $model->ossBuckets[$n1] = $item1;
                    ++$n1;
                }
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
