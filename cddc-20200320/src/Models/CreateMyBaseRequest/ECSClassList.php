<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseRequest;

use AlibabaCloud\Tea\Model;

class ECSClassList extends Model
{
    /**
     * @var string
     */
    public $dataDiskAutoSnapshotPolicyId;

    /**
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @var string
     */
    public $dataDiskPerformanceLevel;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $sysDiskAutoSnapshotPolicyId;

    /**
     * @var int
     */
    public $sysDiskCapacity;

    /**
     * @var bool
     */
    public $sysDiskEncrypted;

    /**
     * @var string
     */
    public $sysDiskKMSKeyId;

    /**
     * @var string
     */
    public $sysDiskType;

    /**
     * @var string
     */
    public $systemDiskPerformanceLevel;
    protected $_name = [
        'dataDiskAutoSnapshotPolicyId' => 'dataDiskAutoSnapshotPolicyId',
        'dataDiskEncrypted'            => 'dataDiskEncrypted',
        'dataDiskKMSKeyId'             => 'dataDiskKMSKeyId',
        'dataDiskPerformanceLevel'     => 'dataDiskPerformanceLevel',
        'diskCapacity'                 => 'diskCapacity',
        'diskCount'                    => 'diskCount',
        'diskType'                     => 'diskType',
        'instanceType'                 => 'instanceType',
        'nodeCount'                    => 'nodeCount',
        'sysDiskAutoSnapshotPolicyId'  => 'sysDiskAutoSnapshotPolicyId',
        'sysDiskCapacity'              => 'sysDiskCapacity',
        'sysDiskEncrypted'             => 'sysDiskEncrypted',
        'sysDiskKMSKeyId'              => 'sysDiskKMSKeyId',
        'sysDiskType'                  => 'sysDiskType',
        'systemDiskPerformanceLevel'   => 'systemDiskPerformanceLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskAutoSnapshotPolicyId) {
            $res['dataDiskAutoSnapshotPolicyId'] = $this->dataDiskAutoSnapshotPolicyId;
        }
        if (null !== $this->dataDiskEncrypted) {
            $res['dataDiskEncrypted'] = $this->dataDiskEncrypted;
        }
        if (null !== $this->dataDiskKMSKeyId) {
            $res['dataDiskKMSKeyId'] = $this->dataDiskKMSKeyId;
        }
        if (null !== $this->dataDiskPerformanceLevel) {
            $res['dataDiskPerformanceLevel'] = $this->dataDiskPerformanceLevel;
        }
        if (null !== $this->diskCapacity) {
            $res['diskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->diskCount) {
            $res['diskCount'] = $this->diskCount;
        }
        if (null !== $this->diskType) {
            $res['diskType'] = $this->diskType;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->nodeCount) {
            $res['nodeCount'] = $this->nodeCount;
        }
        if (null !== $this->sysDiskAutoSnapshotPolicyId) {
            $res['sysDiskAutoSnapshotPolicyId'] = $this->sysDiskAutoSnapshotPolicyId;
        }
        if (null !== $this->sysDiskCapacity) {
            $res['sysDiskCapacity'] = $this->sysDiskCapacity;
        }
        if (null !== $this->sysDiskEncrypted) {
            $res['sysDiskEncrypted'] = $this->sysDiskEncrypted;
        }
        if (null !== $this->sysDiskKMSKeyId) {
            $res['sysDiskKMSKeyId'] = $this->sysDiskKMSKeyId;
        }
        if (null !== $this->sysDiskType) {
            $res['sysDiskType'] = $this->sysDiskType;
        }
        if (null !== $this->systemDiskPerformanceLevel) {
            $res['systemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ECSClassList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataDiskAutoSnapshotPolicyId'])) {
            $model->dataDiskAutoSnapshotPolicyId = $map['dataDiskAutoSnapshotPolicyId'];
        }
        if (isset($map['dataDiskEncrypted'])) {
            $model->dataDiskEncrypted = $map['dataDiskEncrypted'];
        }
        if (isset($map['dataDiskKMSKeyId'])) {
            $model->dataDiskKMSKeyId = $map['dataDiskKMSKeyId'];
        }
        if (isset($map['dataDiskPerformanceLevel'])) {
            $model->dataDiskPerformanceLevel = $map['dataDiskPerformanceLevel'];
        }
        if (isset($map['diskCapacity'])) {
            $model->diskCapacity = $map['diskCapacity'];
        }
        if (isset($map['diskCount'])) {
            $model->diskCount = $map['diskCount'];
        }
        if (isset($map['diskType'])) {
            $model->diskType = $map['diskType'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['nodeCount'])) {
            $model->nodeCount = $map['nodeCount'];
        }
        if (isset($map['sysDiskAutoSnapshotPolicyId'])) {
            $model->sysDiskAutoSnapshotPolicyId = $map['sysDiskAutoSnapshotPolicyId'];
        }
        if (isset($map['sysDiskCapacity'])) {
            $model->sysDiskCapacity = $map['sysDiskCapacity'];
        }
        if (isset($map['sysDiskEncrypted'])) {
            $model->sysDiskEncrypted = $map['sysDiskEncrypted'];
        }
        if (isset($map['sysDiskKMSKeyId'])) {
            $model->sysDiskKMSKeyId = $map['sysDiskKMSKeyId'];
        }
        if (isset($map['sysDiskType'])) {
            $model->sysDiskType = $map['sysDiskType'];
        }
        if (isset($map['systemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['systemDiskPerformanceLevel'];
        }

        return $model;
    }
}
