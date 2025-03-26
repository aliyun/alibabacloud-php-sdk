<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDesktopSessionsRequest extends Model
{
    /**
     * @var bool
     */
    public $checkOsSession;

    /**
     * @var string[]
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
    public $endUserIdFilter;

    /**
     * @var string
     */
    public $officeSiteId;

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
    public $sessionStatus;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $subPayType;
    protected $_name = [
        'checkOsSession' => 'CheckOsSession',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endTime' => 'EndTime',
        'endUserId' => 'EndUserId',
        'endUserIdFilter' => 'EndUserIdFilter',
        'officeSiteId' => 'OfficeSiteId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sessionStatus' => 'SessionStatus',
        'startTime' => 'StartTime',
        'subPayType' => 'SubPayType',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkOsSession) {
            $res['CheckOsSession'] = $this->checkOsSession;
        }

        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->endUserIdFilter) {
            $res['EndUserIdFilter'] = $this->endUserIdFilter;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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

        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
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
        if (isset($map['CheckOsSession'])) {
            $model->checkOsSession = $map['CheckOsSession'];
        }

        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1++] = $item1;
                }
            }
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

        if (isset($map['EndUserIdFilter'])) {
            $model->endUserIdFilter = $map['EndUserIdFilter'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
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

        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        return $model;
    }
}
