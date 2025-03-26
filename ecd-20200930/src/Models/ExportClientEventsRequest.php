<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ExportClientEventsRequest extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string[]
     */
    public $eventTypes;

    /**
     * @var string
     */
    public $langType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endTime' => 'EndTime',
        'endUserId' => 'EndUserId',
        'eventType' => 'EventType',
        'eventTypes' => 'EventTypes',
        'langType' => 'LangType',
        'maxResults' => 'MaxResults',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->eventTypes)) {
            Model::validateArray($this->eventTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->eventTypes) {
            if (\is_array($this->eventTypes)) {
                $res['EventTypes'] = [];
                $n1 = 0;
                foreach ($this->eventTypes as $item1) {
                    $res['EventTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n1 = 0;
                foreach ($map['EventTypes'] as $item1) {
                    $model->eventTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
