<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListIncidentsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $incidentName;

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
    public $incidentUuidsShrink;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $orderFieldName;

    /**
     * @var string[]
     */
    public $owners;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relateAssetId;

    /**
     * @var string
     */
    public $relateEntityId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $threatLevel;
    protected $_name = [
        'alertUuid' => 'AlertUuid',
        'endTime' => 'EndTime',
        'incidentName' => 'IncidentName',
        'incidentStatus' => 'IncidentStatus',
        'incidentTags' => 'IncidentTags',
        'incidentUuidsShrink' => 'IncidentUuids',
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderDirection' => 'OrderDirection',
        'orderFieldName' => 'OrderFieldName',
        'owners' => 'Owners',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'relateAssetId' => 'RelateAssetId',
        'relateEntityId' => 'RelateEntityId',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'startTime' => 'StartTime',
        'threatLevel' => 'ThreatLevel',
    ];

    public function validate()
    {
        if (\is_array($this->owners)) {
            Model::validateArray($this->owners);
        }
        if (\is_array($this->threatLevel)) {
            Model::validateArray($this->threatLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->incidentName) {
            $res['IncidentName'] = $this->incidentName;
        }

        if (null !== $this->incidentStatus) {
            $res['IncidentStatus'] = $this->incidentStatus;
        }

        if (null !== $this->incidentTags) {
            $res['IncidentTags'] = $this->incidentTags;
        }

        if (null !== $this->incidentUuidsShrink) {
            $res['IncidentUuids'] = $this->incidentUuidsShrink;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }

        if (null !== $this->orderFieldName) {
            $res['OrderFieldName'] = $this->orderFieldName;
        }

        if (null !== $this->owners) {
            if (\is_array($this->owners)) {
                $res['Owners'] = [];
                $n1 = 0;
                foreach ($this->owners as $item1) {
                    $res['Owners'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relateAssetId) {
            $res['RelateAssetId'] = $this->relateAssetId;
        }

        if (null !== $this->relateEntityId) {
            $res['RelateEntityId'] = $this->relateEntityId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->threatLevel) {
            if (\is_array($this->threatLevel)) {
                $res['ThreatLevel'] = [];
                $n1 = 0;
                foreach ($this->threatLevel as $item1) {
                    $res['ThreatLevel'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IncidentName'])) {
            $model->incidentName = $map['IncidentName'];
        }

        if (isset($map['IncidentStatus'])) {
            $model->incidentStatus = $map['IncidentStatus'];
        }

        if (isset($map['IncidentTags'])) {
            $model->incidentTags = $map['IncidentTags'];
        }

        if (isset($map['IncidentUuids'])) {
            $model->incidentUuidsShrink = $map['IncidentUuids'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }

        if (isset($map['OrderFieldName'])) {
            $model->orderFieldName = $map['OrderFieldName'];
        }

        if (isset($map['Owners'])) {
            if (!empty($map['Owners'])) {
                $model->owners = [];
                $n1 = 0;
                foreach ($map['Owners'] as $item1) {
                    $model->owners[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelateAssetId'])) {
            $model->relateAssetId = $map['RelateAssetId'];
        }

        if (isset($map['RelateEntityId'])) {
            $model->relateEntityId = $map['RelateEntityId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['ThreatLevel'])) {
            if (!empty($map['ThreatLevel'])) {
                $model->threatLevel = [];
                $n1 = 0;
                foreach ($map['ThreatLevel'] as $item1) {
                    $model->threatLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
