<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\DataAgentApplication\lastRequest;

class DataAgentApplication extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appUrl;

    /**
     * @var string
     */
    public $applicationExtraInfo;

    /**
     * @var int
     */
    public $applicationRevision;

    /**
     * @var string
     */
    public $availabilityErrorCode;

    /**
     * @var string
     */
    public $availabilityErrorMessage;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $creatorUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var lastRequest
     */
    public $lastRequest;

    /**
     * @var string
     */
    public $mainUid;

    /**
     * @var bool
     */
    public $observationStale;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'AgentId',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appUrl' => 'AppUrl',
        'applicationExtraInfo' => 'ApplicationExtraInfo',
        'applicationRevision' => 'ApplicationRevision',
        'availabilityErrorCode' => 'AvailabilityErrorCode',
        'availabilityErrorMessage' => 'AvailabilityErrorMessage',
        'creatorName' => 'CreatorName',
        'creatorUid' => 'CreatorUid',
        'description' => 'Description',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'lastRequest' => 'LastRequest',
        'mainUid' => 'MainUid',
        'observationStale' => 'ObservationStale',
        'ready' => 'Ready',
        'region' => 'Region',
        'sessionId' => 'SessionId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->lastRequest) {
            $this->lastRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appUrl) {
            $res['AppUrl'] = $this->appUrl;
        }

        if (null !== $this->applicationExtraInfo) {
            $res['ApplicationExtraInfo'] = $this->applicationExtraInfo;
        }

        if (null !== $this->applicationRevision) {
            $res['ApplicationRevision'] = $this->applicationRevision;
        }

        if (null !== $this->availabilityErrorCode) {
            $res['AvailabilityErrorCode'] = $this->availabilityErrorCode;
        }

        if (null !== $this->availabilityErrorMessage) {
            $res['AvailabilityErrorMessage'] = $this->availabilityErrorMessage;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->creatorUid) {
            $res['CreatorUid'] = $this->creatorUid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->lastRequest) {
            $res['LastRequest'] = null !== $this->lastRequest ? $this->lastRequest->toArray($noStream) : $this->lastRequest;
        }

        if (null !== $this->mainUid) {
            $res['MainUid'] = $this->mainUid;
        }

        if (null !== $this->observationStale) {
            $res['ObservationStale'] = $this->observationStale;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppUrl'])) {
            $model->appUrl = $map['AppUrl'];
        }

        if (isset($map['ApplicationExtraInfo'])) {
            $model->applicationExtraInfo = $map['ApplicationExtraInfo'];
        }

        if (isset($map['ApplicationRevision'])) {
            $model->applicationRevision = $map['ApplicationRevision'];
        }

        if (isset($map['AvailabilityErrorCode'])) {
            $model->availabilityErrorCode = $map['AvailabilityErrorCode'];
        }

        if (isset($map['AvailabilityErrorMessage'])) {
            $model->availabilityErrorMessage = $map['AvailabilityErrorMessage'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['CreatorUid'])) {
            $model->creatorUid = $map['CreatorUid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LastRequest'])) {
            $model->lastRequest = lastRequest::fromMap($map['LastRequest']);
        }

        if (isset($map['MainUid'])) {
            $model->mainUid = $map['MainUid'];
        }

        if (isset($map['ObservationStale'])) {
            $model->observationStale = $map['ObservationStale'];
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
