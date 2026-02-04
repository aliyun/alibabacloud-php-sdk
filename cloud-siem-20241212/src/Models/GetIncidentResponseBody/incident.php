<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetIncidentResponseBody;

use AlibabaCloud\Dara\Model;

class incident extends Model
{
    /**
     * @var mixed
     */
    public $attckTactics;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $detectionRuleId;

    /**
     * @var string
     */
    public $incidentAggregationType;

    /**
     * @var string
     */
    public $incidentDescription;

    /**
     * @var string
     */
    public $incidentName;

    /**
     * @var string
     */
    public $incidentRemark;

    /**
     * @var int
     */
    public $incidentStatus;

    /**
     * @var string
     */
    public $incidentTags;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $relateAlertCount;

    /**
     * @var int
     */
    public $relateAssetCount;

    /**
     * @var mixed
     */
    public $relateDataSourceIds;

    /**
     * @var mixed
     */
    public $relateUserIds;

    /**
     * @var string
     */
    public $threatLevel;

    /**
     * @var string
     */
    public $threatScore;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'attckTactics' => 'AttckTactics',
        'createTime' => 'CreateTime',
        'detectionRuleId' => 'DetectionRuleId',
        'incidentAggregationType' => 'IncidentAggregationType',
        'incidentDescription' => 'IncidentDescription',
        'incidentName' => 'IncidentName',
        'incidentRemark' => 'IncidentRemark',
        'incidentStatus' => 'IncidentStatus',
        'incidentTags' => 'IncidentTags',
        'incidentUuid' => 'IncidentUuid',
        'owner' => 'Owner',
        'relateAlertCount' => 'RelateAlertCount',
        'relateAssetCount' => 'RelateAssetCount',
        'relateDataSourceIds' => 'RelateDataSourceIds',
        'relateUserIds' => 'RelateUserIds',
        'threatLevel' => 'ThreatLevel',
        'threatScore' => 'ThreatScore',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attckTactics) {
            $res['AttckTactics'] = $this->attckTactics;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->detectionRuleId) {
            $res['DetectionRuleId'] = $this->detectionRuleId;
        }

        if (null !== $this->incidentAggregationType) {
            $res['IncidentAggregationType'] = $this->incidentAggregationType;
        }

        if (null !== $this->incidentDescription) {
            $res['IncidentDescription'] = $this->incidentDescription;
        }

        if (null !== $this->incidentName) {
            $res['IncidentName'] = $this->incidentName;
        }

        if (null !== $this->incidentRemark) {
            $res['IncidentRemark'] = $this->incidentRemark;
        }

        if (null !== $this->incidentStatus) {
            $res['IncidentStatus'] = $this->incidentStatus;
        }

        if (null !== $this->incidentTags) {
            $res['IncidentTags'] = $this->incidentTags;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->relateAlertCount) {
            $res['RelateAlertCount'] = $this->relateAlertCount;
        }

        if (null !== $this->relateAssetCount) {
            $res['RelateAssetCount'] = $this->relateAssetCount;
        }

        if (null !== $this->relateDataSourceIds) {
            $res['RelateDataSourceIds'] = $this->relateDataSourceIds;
        }

        if (null !== $this->relateUserIds) {
            $res['RelateUserIds'] = $this->relateUserIds;
        }

        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }

        if (null !== $this->threatScore) {
            $res['ThreatScore'] = $this->threatScore;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AttckTactics'])) {
            $model->attckTactics = $map['AttckTactics'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DetectionRuleId'])) {
            $model->detectionRuleId = $map['DetectionRuleId'];
        }

        if (isset($map['IncidentAggregationType'])) {
            $model->incidentAggregationType = $map['IncidentAggregationType'];
        }

        if (isset($map['IncidentDescription'])) {
            $model->incidentDescription = $map['IncidentDescription'];
        }

        if (isset($map['IncidentName'])) {
            $model->incidentName = $map['IncidentName'];
        }

        if (isset($map['IncidentRemark'])) {
            $model->incidentRemark = $map['IncidentRemark'];
        }

        if (isset($map['IncidentStatus'])) {
            $model->incidentStatus = $map['IncidentStatus'];
        }

        if (isset($map['IncidentTags'])) {
            $model->incidentTags = $map['IncidentTags'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RelateAlertCount'])) {
            $model->relateAlertCount = $map['RelateAlertCount'];
        }

        if (isset($map['RelateAssetCount'])) {
            $model->relateAssetCount = $map['RelateAssetCount'];
        }

        if (isset($map['RelateDataSourceIds'])) {
            $model->relateDataSourceIds = $map['RelateDataSourceIds'];
        }

        if (isset($map['RelateUserIds'])) {
            $model->relateUserIds = $map['RelateUserIds'];
        }

        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        if (isset($map['ThreatScore'])) {
            $model->threatScore = $map['ThreatScore'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
