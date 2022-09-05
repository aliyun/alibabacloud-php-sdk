<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDriveRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $driveName;

    /**
     * @var string
     */
    public $externalDomainId;

    /**
     * @var bool
     */
    public $profileRoaming;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $usedSize;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'aliUid'           => 'AliUid',
        'description'      => 'Description',
        'domainId'         => 'DomainId',
        'driveName'        => 'DriveName',
        'externalDomainId' => 'ExternalDomainId',
        'profileRoaming'   => 'ProfileRoaming',
        'regionId'         => 'RegionId',
        'resourceType'     => 'ResourceType',
        'totalSize'        => 'TotalSize',
        'type'             => 'Type',
        'usedSize'         => 'UsedSize',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->driveName) {
            $res['DriveName'] = $this->driveName;
        }
        if (null !== $this->externalDomainId) {
            $res['ExternalDomainId'] = $this->externalDomainId;
        }
        if (null !== $this->profileRoaming) {
            $res['ProfileRoaming'] = $this->profileRoaming;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usedSize) {
            $res['UsedSize'] = $this->usedSize;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDriveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DriveName'])) {
            $model->driveName = $map['DriveName'];
        }
        if (isset($map['ExternalDomainId'])) {
            $model->externalDomainId = $map['ExternalDomainId'];
        }
        if (isset($map['ProfileRoaming'])) {
            $model->profileRoaming = $map['ProfileRoaming'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UsedSize'])) {
            $model->usedSize = $map['UsedSize'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
