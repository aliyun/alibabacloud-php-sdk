<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeMongoDBLogConfigResponseBody extends Model
{
    /**
     * @description Indicates whether the audit log feature is enabled. Valid values:
     *
     *   **true**: The audit log feature is enabled.
     *   **false**: The audit log feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAudit;

    /**
     * @description Indicates whether a rule to distribute logs to Logtail is created. For more information, see [Logtail overview](~~28979~~). Valid values:
     *
     *   **1**: A rule to distribute logs to Logtail is created.
     *   **0** or **null**: A rule to distribute logs to Logtail is not created.
     *
     * @example 1
     *
     * @var int
     */
    public $isEtlMetaExist;

    /**
     * @description Indicates whether a project exists in the current region. Valid values:
     *
     *   **1**: A logging project exists in the current region.
     *   **0** or **null**: A logging project does not exist in the current region.
     *
     * @example 1
     *
     * @var int
     */
    public $isUserProjectLogstoreExist;

    /**
     * @description The maximum storage capacity for the formal edition of the audit log feature. If the value is -1, no maximum storage capacity is set.
     *
     * @example -1
     *
     * @var int
     */
    public $preserveStorageForStandard;

    /**
     * @description The maximum storage capacity for the free trial edition of the audit log feature. Unit: bytes. You can set the maximum storage capacity to 107,374,182,400 bytes.
     *
     * @example 107374182400
     *
     * @var int
     */
    public $preserveStorageForTrail;

    /**
     * @description The request ID.
     *
     * @example 664ECE26-658A-47C5-88F6-870B0132E8D2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the audit log feature. Valid values:
     *
     *   **Trail**: the free trial edition
     *   **Standard**: the official edition
     *
     * @example Standard
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The retention period for the official edition of the audit log feature. Valid values: 1 to 365. Unit: day.
     *
     * @example 30
     *
     * @var int
     */
    public $ttlForStandard;

    /**
     * @description The retention period for the free trial edition of the audit log feature.
     *
     * @example 1
     *
     * @var int
     */
    public $ttlForTrail;

    /**
     * @description The used storage capacity for the formal edition of the audit log feature. Unit: bytes.
     *
     * @example 20163
     *
     * @var int
     */
    public $usedStorageForStandard;

    /**
     * @description The used storage capacity for the free trial edition of the audit log feature. Unit: bytes.
     *
     * @example 12548178759
     *
     * @var int
     */
    public $usedStorageForTrail;

    /**
     * @description The name of the project.
     *
     * @example nosql-176498472570****-cn-hangzhou
     *
     * @var string
     */
    public $userProjectName;
    protected $_name = [
        'enableAudit'                => 'EnableAudit',
        'isEtlMetaExist'             => 'IsEtlMetaExist',
        'isUserProjectLogstoreExist' => 'IsUserProjectLogstoreExist',
        'preserveStorageForStandard' => 'PreserveStorageForStandard',
        'preserveStorageForTrail'    => 'PreserveStorageForTrail',
        'requestId'                  => 'RequestId',
        'serviceType'                => 'ServiceType',
        'ttlForStandard'             => 'TtlForStandard',
        'ttlForTrail'                => 'TtlForTrail',
        'usedStorageForStandard'     => 'UsedStorageForStandard',
        'usedStorageForTrail'        => 'UsedStorageForTrail',
        'userProjectName'            => 'UserProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->isEtlMetaExist) {
            $res['IsEtlMetaExist'] = $this->isEtlMetaExist;
        }
        if (null !== $this->isUserProjectLogstoreExist) {
            $res['IsUserProjectLogstoreExist'] = $this->isUserProjectLogstoreExist;
        }
        if (null !== $this->preserveStorageForStandard) {
            $res['PreserveStorageForStandard'] = $this->preserveStorageForStandard;
        }
        if (null !== $this->preserveStorageForTrail) {
            $res['PreserveStorageForTrail'] = $this->preserveStorageForTrail;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->ttlForStandard) {
            $res['TtlForStandard'] = $this->ttlForStandard;
        }
        if (null !== $this->ttlForTrail) {
            $res['TtlForTrail'] = $this->ttlForTrail;
        }
        if (null !== $this->usedStorageForStandard) {
            $res['UsedStorageForStandard'] = $this->usedStorageForStandard;
        }
        if (null !== $this->usedStorageForTrail) {
            $res['UsedStorageForTrail'] = $this->usedStorageForTrail;
        }
        if (null !== $this->userProjectName) {
            $res['UserProjectName'] = $this->userProjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMongoDBLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['IsEtlMetaExist'])) {
            $model->isEtlMetaExist = $map['IsEtlMetaExist'];
        }
        if (isset($map['IsUserProjectLogstoreExist'])) {
            $model->isUserProjectLogstoreExist = $map['IsUserProjectLogstoreExist'];
        }
        if (isset($map['PreserveStorageForStandard'])) {
            $model->preserveStorageForStandard = $map['PreserveStorageForStandard'];
        }
        if (isset($map['PreserveStorageForTrail'])) {
            $model->preserveStorageForTrail = $map['PreserveStorageForTrail'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['TtlForStandard'])) {
            $model->ttlForStandard = $map['TtlForStandard'];
        }
        if (isset($map['TtlForTrail'])) {
            $model->ttlForTrail = $map['TtlForTrail'];
        }
        if (isset($map['UsedStorageForStandard'])) {
            $model->usedStorageForStandard = $map['UsedStorageForStandard'];
        }
        if (isset($map['UsedStorageForTrail'])) {
            $model->usedStorageForTrail = $map['UsedStorageForTrail'];
        }
        if (isset($map['UserProjectName'])) {
            $model->userProjectName = $map['UserProjectName'];
        }

        return $model;
    }
}
