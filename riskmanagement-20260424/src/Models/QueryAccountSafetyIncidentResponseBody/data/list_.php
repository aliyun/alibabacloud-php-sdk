<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryAccountSafetyIncidentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryAccountSafetyIncidentResponseBody\data\list_\dateExtras;

class list_ extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $antiPunishTime;

    /**
     * @var dateExtras
     */
    public $dateExtras;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventImpact;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventReason;

    /**
     * @var string
     */
    public $punishTime;

    /**
     * @var string
     */
    public $reinforcement;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tip;

    /**
     * @var string
     */
    public $userGuideName;

    /**
     * @var string
     */
    public $userGuideUrl;
    protected $_name = [
        'actionCode' => 'ActionCode',
        'actionName' => 'ActionName',
        'antiPunishTime' => 'AntiPunishTime',
        'dateExtras' => 'DateExtras',
        'eventId' => 'EventId',
        'eventImpact' => 'EventImpact',
        'eventName' => 'EventName',
        'eventReason' => 'EventReason',
        'punishTime' => 'PunishTime',
        'reinforcement' => 'Reinforcement',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'tip' => 'Tip',
        'userGuideName' => 'UserGuideName',
        'userGuideUrl' => 'UserGuideUrl',
    ];

    public function validate()
    {
        if (null !== $this->dateExtras) {
            $this->dateExtras->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }

        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        if (null !== $this->antiPunishTime) {
            $res['AntiPunishTime'] = $this->antiPunishTime;
        }

        if (null !== $this->dateExtras) {
            $res['DateExtras'] = null !== $this->dateExtras ? $this->dateExtras->toArray($noStream) : $this->dateExtras;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventImpact) {
            $res['EventImpact'] = $this->eventImpact;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventReason) {
            $res['EventReason'] = $this->eventReason;
        }

        if (null !== $this->punishTime) {
            $res['PunishTime'] = $this->punishTime;
        }

        if (null !== $this->reinforcement) {
            $res['Reinforcement'] = $this->reinforcement;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tip) {
            $res['Tip'] = $this->tip;
        }

        if (null !== $this->userGuideName) {
            $res['UserGuideName'] = $this->userGuideName;
        }

        if (null !== $this->userGuideUrl) {
            $res['UserGuideUrl'] = $this->userGuideUrl;
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
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }

        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        if (isset($map['AntiPunishTime'])) {
            $model->antiPunishTime = $map['AntiPunishTime'];
        }

        if (isset($map['DateExtras'])) {
            $model->dateExtras = dateExtras::fromMap($map['DateExtras']);
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventImpact'])) {
            $model->eventImpact = $map['EventImpact'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventReason'])) {
            $model->eventReason = $map['EventReason'];
        }

        if (isset($map['PunishTime'])) {
            $model->punishTime = $map['PunishTime'];
        }

        if (isset($map['Reinforcement'])) {
            $model->reinforcement = $map['Reinforcement'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tip'])) {
            $model->tip = $map['Tip'];
        }

        if (isset($map['UserGuideName'])) {
            $model->userGuideName = $map['UserGuideName'];
        }

        if (isset($map['UserGuideUrl'])) {
            $model->userGuideUrl = $map['UserGuideUrl'];
        }

        return $model;
    }
}
