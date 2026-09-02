<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListIncidentsResponseBody;

use AlibabaCloud\Dara\Model;

class incidents extends Model
{
    /**
     * @var string
     */
    public $alertInfos;

    /**
     * @var string[]
     */
    public $alertSources;

    /**
     * @var string
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
    public $detectionRuleName;

    /**
     * @var string
     */
    public $entityInfos;

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
     * @var string
     */
    public $ownerName;

    /**
     * @var int
     */
    public $relateAlertCount;

    /**
     * @var int
     */
    public $relateAssetCount;

    /**
     * @var int
     */
    public $responseTime;

    /**
     * @var string[]
     */
    public $responseTypes;

    /**
     * @var string
     */
    public $threatLevel;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'alertInfos' => 'AlertInfos',
        'alertSources' => 'AlertSources',
        'attckTactics' => 'AttckTactics',
        'createTime' => 'CreateTime',
        'detectionRuleId' => 'DetectionRuleId',
        'detectionRuleName' => 'DetectionRuleName',
        'entityInfos' => 'EntityInfos',
        'incidentDescription' => 'IncidentDescription',
        'incidentName' => 'IncidentName',
        'incidentRemark' => 'IncidentRemark',
        'incidentStatus' => 'IncidentStatus',
        'incidentTags' => 'IncidentTags',
        'incidentUuid' => 'IncidentUuid',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'relateAlertCount' => 'RelateAlertCount',
        'relateAssetCount' => 'RelateAssetCount',
        'responseTime' => 'ResponseTime',
        'responseTypes' => 'ResponseTypes',
        'threatLevel' => 'ThreatLevel',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->alertSources)) {
            Model::validateArray($this->alertSources);
        }
        if (\is_array($this->responseTypes)) {
            Model::validateArray($this->responseTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertInfos) {
            $res['AlertInfos'] = $this->alertInfos;
        }

        if (null !== $this->alertSources) {
            if (\is_array($this->alertSources)) {
                $res['AlertSources'] = [];
                $n1 = 0;
                foreach ($this->alertSources as $item1) {
                    $res['AlertSources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attckTactics) {
            $res['AttckTactics'] = $this->attckTactics;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->detectionRuleId) {
            $res['DetectionRuleId'] = $this->detectionRuleId;
        }

        if (null !== $this->detectionRuleName) {
            $res['DetectionRuleName'] = $this->detectionRuleName;
        }

        if (null !== $this->entityInfos) {
            $res['EntityInfos'] = $this->entityInfos;
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

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->relateAlertCount) {
            $res['RelateAlertCount'] = $this->relateAlertCount;
        }

        if (null !== $this->relateAssetCount) {
            $res['RelateAssetCount'] = $this->relateAssetCount;
        }

        if (null !== $this->responseTime) {
            $res['ResponseTime'] = $this->responseTime;
        }

        if (null !== $this->responseTypes) {
            if (\is_array($this->responseTypes)) {
                $res['ResponseTypes'] = [];
                $n1 = 0;
                foreach ($this->responseTypes as $item1) {
                    $res['ResponseTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
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
        if (isset($map['AlertInfos'])) {
            $model->alertInfos = $map['AlertInfos'];
        }

        if (isset($map['AlertSources'])) {
            if (!empty($map['AlertSources'])) {
                $model->alertSources = [];
                $n1 = 0;
                foreach ($map['AlertSources'] as $item1) {
                    $model->alertSources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AttckTactics'])) {
            $model->attckTactics = $map['AttckTactics'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DetectionRuleId'])) {
            $model->detectionRuleId = $map['DetectionRuleId'];
        }

        if (isset($map['DetectionRuleName'])) {
            $model->detectionRuleName = $map['DetectionRuleName'];
        }

        if (isset($map['EntityInfos'])) {
            $model->entityInfos = $map['EntityInfos'];
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

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['RelateAlertCount'])) {
            $model->relateAlertCount = $map['RelateAlertCount'];
        }

        if (isset($map['RelateAssetCount'])) {
            $model->relateAssetCount = $map['RelateAssetCount'];
        }

        if (isset($map['ResponseTime'])) {
            $model->responseTime = $map['ResponseTime'];
        }

        if (isset($map['ResponseTypes'])) {
            if (!empty($map['ResponseTypes'])) {
                $model->responseTypes = [];
                $n1 = 0;
                foreach ($map['ResponseTypes'] as $item1) {
                    $model->responseTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
