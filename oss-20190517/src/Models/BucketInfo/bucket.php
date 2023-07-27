<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\BucketInfo;

use AlibabaCloud\SDK\Oss\V20190517\Models\AccessControlList;
use AlibabaCloud\SDK\Oss\V20190517\Models\BucketInfo\bucket\serverSideEncryptionRule;
use AlibabaCloud\SDK\Oss\V20190517\Models\LoggingEnabled;
use AlibabaCloud\SDK\Oss\V20190517\Models\Owner;
use AlibabaCloud\Tea\Model;

class bucket extends Model
{
    /**
     * @var AccessControlList
     */
    public $accessControlList;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $accessMonitor;

    /**
     * @var LoggingEnabled
     */
    public $bucketPolicy;

    /**
     * @example 2022-01-06T08:20:09.000Z
     *
     * @var string
     */
    public $creationDate;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $crossRegionReplication;

    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @var string
     */
    public $extranetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @example oss-cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @example test-bucket
     *
     * @var string
     */
    public $name;

    /**
     * @var Owner
     */
    public $owner;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var serverSideEncryptionRule
     */
    public $serverSideEncryptionRule;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $transferAcceleration;

    /**
     * @var string
     */
    public $versioning;
    protected $_name = [
        'accessControlList'        => 'AccessControlList',
        'accessMonitor'            => 'AccessMonitor',
        'bucketPolicy'             => 'BucketPolicy',
        'creationDate'             => 'CreationDate',
        'crossRegionReplication'   => 'CrossRegionReplication',
        'dataRedundancyType'       => 'DataRedundancyType',
        'extranetEndpoint'         => 'ExtranetEndpoint',
        'intranetEndpoint'         => 'IntranetEndpoint',
        'location'                 => 'Location',
        'name'                     => 'Name',
        'owner'                    => 'Owner',
        'resourceGroupId'          => 'ResourceGroupId',
        'serverSideEncryptionRule' => 'ServerSideEncryptionRule',
        'storageClass'             => 'StorageClass',
        'transferAcceleration'     => 'TransferAcceleration',
        'versioning'               => 'Versioning',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlList) {
            $res['AccessControlList'] = null !== $this->accessControlList ? $this->accessControlList->toMap() : null;
        }
        if (null !== $this->accessMonitor) {
            $res['AccessMonitor'] = $this->accessMonitor;
        }
        if (null !== $this->bucketPolicy) {
            $res['BucketPolicy'] = null !== $this->bucketPolicy ? $this->bucketPolicy->toMap() : null;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->crossRegionReplication) {
            $res['CrossRegionReplication'] = $this->crossRegionReplication;
        }
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->extranetEndpoint) {
            $res['ExtranetEndpoint'] = $this->extranetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverSideEncryptionRule) {
            $res['ServerSideEncryptionRule'] = null !== $this->serverSideEncryptionRule ? $this->serverSideEncryptionRule->toMap() : null;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->transferAcceleration) {
            $res['TransferAcceleration'] = $this->transferAcceleration;
        }
        if (null !== $this->versioning) {
            $res['Versioning'] = $this->versioning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucket
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlList'])) {
            $model->accessControlList = AccessControlList::fromMap($map['AccessControlList']);
        }
        if (isset($map['AccessMonitor'])) {
            $model->accessMonitor = $map['AccessMonitor'];
        }
        if (isset($map['BucketPolicy'])) {
            $model->bucketPolicy = LoggingEnabled::fromMap($map['BucketPolicy']);
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['CrossRegionReplication'])) {
            $model->crossRegionReplication = $map['CrossRegionReplication'];
        }
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }
        if (isset($map['ExtranetEndpoint'])) {
            $model->extranetEndpoint = $map['ExtranetEndpoint'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = Owner::fromMap($map['Owner']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerSideEncryptionRule'])) {
            $model->serverSideEncryptionRule = serverSideEncryptionRule::fromMap($map['ServerSideEncryptionRule']);
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['TransferAcceleration'])) {
            $model->transferAcceleration = $map['TransferAcceleration'];
        }
        if (isset($map['Versioning'])) {
            $model->versioning = $map['Versioning'];
        }

        return $model;
    }
}
