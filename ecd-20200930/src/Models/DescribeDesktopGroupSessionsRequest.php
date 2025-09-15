<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDesktopGroupSessionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @var string
     */
    public $desktopGroupName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var bool
     */
    public $fillTerminalInfo;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopGroupIds' => 'DesktopGroupIds',
        'desktopGroupName' => 'DesktopGroupName',
        'endTime' => 'EndTime',
        'endUserId' => 'EndUserId',
        'fillTerminalInfo' => 'FillTerminalInfo',
        'language' => 'Language',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownType' => 'OwnType',
        'regionId' => 'RegionId',
        'sessionStatus' => 'SessionStatus',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->desktopGroupIds)) {
            Model::validateArray($this->desktopGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopGroupIds) {
            if (\is_array($this->desktopGroupIds)) {
                $res['DesktopGroupIds'] = [];
                $n1 = 0;
                foreach ($this->desktopGroupIds as $item1) {
                    $res['DesktopGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->fillTerminalInfo) {
            $res['FillTerminalInfo'] = $this->fillTerminalInfo;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
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
        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = [];
                $n1 = 0;
                foreach ($map['DesktopGroupIds'] as $item1) {
                    $model->desktopGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['FillTerminalInfo'])) {
            $model->fillTerminalInfo = $map['FillTerminalInfo'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
