<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTemplateRequest;

use AlibabaCloud\Tea\Model;

class regionConfigList extends Model
{
    /**
     * @example cn-hangzhou+dir-709****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example eds.enterprise_office.8c16g
     *
     * @var string
     */
    public $resourceInstanceType;

    /**
     * @example sp-35fvn8m2*****
     *
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @example vsw-adjrehad1****
     *
     * @var string
     */
    public $subnetId;

    /**
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnable;

    /**
     * @example a7b3c0c8-b3a2-4876-b1cc-116dddc9****
     *
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'resourceInstanceType' => 'ResourceInstanceType',
        'snapshotPolicyId' => 'SnapshotPolicyId',
        'subnetId' => 'SubnetId',
        'volumeEncryptionEnable' => 'VolumeEncryptionEnable',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceInstanceType) {
            $res['ResourceInstanceType'] = $this->resourceInstanceType;
        }
        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->volumeEncryptionEnable) {
            $res['VolumeEncryptionEnable'] = $this->volumeEncryptionEnable;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceInstanceType'])) {
            $model->resourceInstanceType = $map['ResourceInstanceType'];
        }
        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['VolumeEncryptionEnable'])) {
            $model->volumeEncryptionEnable = $map['VolumeEncryptionEnable'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
