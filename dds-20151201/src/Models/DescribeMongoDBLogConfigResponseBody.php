<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeMongoDBLogConfigResponseBody extends Model
{
    /**
     * @var bool
     */
    public $enableAudit;

    /**
     * @var int
     */
    public $isEtlMetaExist;

    /**
     * @var int
     */
    public $isUserProjectLogstoreExist;

    /**
     * @var int
     */
    public $preserveStorageForStandard;

    /**
     * @var int
     */
    public $preserveStorageForTrail;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var int
     */
    public $ttlForStandard;

    /**
     * @var int
     */
    public $ttlForTrail;

    /**
     * @var int
     */
    public $usedStorageForStandard;

    /**
     * @var int
     */
    public $usedStorageForTrail;

    /**
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
