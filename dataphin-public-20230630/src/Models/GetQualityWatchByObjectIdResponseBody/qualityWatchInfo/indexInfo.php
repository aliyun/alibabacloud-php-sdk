<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchByObjectIdResponseBody\qualityWatchInfo;

use AlibabaCloud\Dara\Model;

class indexInfo extends Model
{
    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $cellSumLogicTableName;

    /**
     * @var string
     */
    public $computeType;

    /**
     * @var string
     */
    public $dateType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $granularityDisplayName;

    /**
     * @var int
     */
    public $granularityId;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
        'catalog' => 'Catalog',
        'cellSumLogicTableName' => 'CellSumLogicTableName',
        'computeType' => 'ComputeType',
        'dateType' => 'DateType',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'granularityDisplayName' => 'GranularityDisplayName',
        'granularityId' => 'GranularityId',
        'guid' => 'Guid',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->cellSumLogicTableName) {
            $res['CellSumLogicTableName'] = $this->cellSumLogicTableName;
        }

        if (null !== $this->computeType) {
            $res['ComputeType'] = $this->computeType;
        }

        if (null !== $this->dateType) {
            $res['DateType'] = $this->dateType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->granularityDisplayName) {
            $res['GranularityDisplayName'] = $this->granularityDisplayName;
        }

        if (null !== $this->granularityId) {
            $res['GranularityId'] = $this->granularityId;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['CellSumLogicTableName'])) {
            $model->cellSumLogicTableName = $map['CellSumLogicTableName'];
        }

        if (isset($map['ComputeType'])) {
            $model->computeType = $map['ComputeType'];
        }

        if (isset($map['DateType'])) {
            $model->dateType = $map['DateType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['GranularityDisplayName'])) {
            $model->granularityDisplayName = $map['GranularityDisplayName'];
        }

        if (isset($map['GranularityId'])) {
            $model->granularityId = $map['GranularityId'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
