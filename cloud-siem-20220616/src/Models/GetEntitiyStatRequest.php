<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class GetEntitiyStatRequest extends Model
{
    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetUuid;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityUuid;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $isAsset;

    /**
     * @var string
     */
    public $isMalwareEntity;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'assetName' => 'AssetName',
        'assetUuid' => 'AssetUuid',
        'entityName' => 'EntityName',
        'entityType' => 'EntityType',
        'entityUuid' => 'EntityUuid',
        'incidentUuid' => 'IncidentUuid',
        'isAsset' => 'IsAsset',
        'isMalwareEntity' => 'IsMalwareEntity',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetUuid) {
            $res['AssetUuid'] = $this->assetUuid;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->isAsset) {
            $res['IsAsset'] = $this->isAsset;
        }

        if (null !== $this->isMalwareEntity) {
            $res['IsMalwareEntity'] = $this->isMalwareEntity;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetUuid'])) {
            $model->assetUuid = $map['AssetUuid'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['IsAsset'])) {
            $model->isAsset = $map['IsAsset'];
        }

        if (isset($map['IsMalwareEntity'])) {
            $model->isMalwareEntity = $map['IsMalwareEntity'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
