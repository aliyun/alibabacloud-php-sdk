<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertsRequest extends Model
{
    /**
     * @example Unusual Logon-login_common_account
     *
     * @var string
     */
    public $alertTitle;

    /**
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $alertUuid;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $isDefend;

    /**
     * @example ["serious","suspicious","remind"]
     *
     * @var string[]
     */
    public $level;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example sas
     *
     * @var string
     */
    public $source;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 176555323***
     *
     * @var string
     */
    public $subUserId;
    protected $_name = [
        'alertTitle'  => 'AlertTitle',
        'alertUuid'   => 'AlertUuid',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'isDefend'    => 'IsDefend',
        'level'       => 'Level',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'source'      => 'Source',
        'startTime'   => 'StartTime',
        'subUserId'   => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTitle) {
            $res['AlertTitle'] = $this->alertTitle;
        }
        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isDefend) {
            $res['IsDefend'] = $this->isDefend;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTitle'])) {
            $model->alertTitle = $map['AlertTitle'];
        }
        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsDefend'])) {
            $model->isDefend = $map['IsDefend'];
        }
        if (isset($map['Level'])) {
            if (!empty($map['Level'])) {
                $model->level = $map['Level'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
