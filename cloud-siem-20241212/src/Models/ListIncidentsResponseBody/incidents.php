<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListIncidentsResponseBody;

use AlibabaCloud\Dara\Model;

class incidents extends Model
{
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
     * @var string
     */
    public $threatLevel;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'detectionRuleId' => 'DetectionRuleId',
        'incidentName' => 'IncidentName',
        'incidentRemark' => 'IncidentRemark',
        'incidentStatus' => 'IncidentStatus',
        'incidentTags' => 'IncidentTags',
        'incidentUuid' => 'IncidentUuid',
        'owner' => 'Owner',
        'relateAlertCount' => 'RelateAlertCount',
        'relateAssetCount' => 'RelateAssetCount',
        'threatLevel' => 'ThreatLevel',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->detectionRuleId) {
            $res['DetectionRuleId'] = $this->detectionRuleId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DetectionRuleId'])) {
            $model->detectionRuleId = $map['DetectionRuleId'];
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

        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
