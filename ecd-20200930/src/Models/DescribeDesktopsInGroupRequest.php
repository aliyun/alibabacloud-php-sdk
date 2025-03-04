<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDesktopsInGroupRequest extends Model
{
    /**
     * @var int
     */
    public $customEndTimePeriod;
    /**
     * @var int
     */
    public $customStartTimePeriod;
    /**
     * @var string
     */
    public $desktopGroupId;
    /**
     * @var bool
     */
    public $ignoreDeleted;
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
    public $payType;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'customEndTimePeriod'   => 'CustomEndTimePeriod',
        'customStartTimePeriod' => 'CustomStartTimePeriod',
        'desktopGroupId'        => 'DesktopGroupId',
        'ignoreDeleted'         => 'IgnoreDeleted',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'payType'               => 'PayType',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customEndTimePeriod) {
            $res['CustomEndTimePeriod'] = $this->customEndTimePeriod;
        }

        if (null !== $this->customStartTimePeriod) {
            $res['CustomStartTimePeriod'] = $this->customStartTimePeriod;
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->ignoreDeleted) {
            $res['IgnoreDeleted'] = $this->ignoreDeleted;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CustomEndTimePeriod'])) {
            $model->customEndTimePeriod = $map['CustomEndTimePeriod'];
        }

        if (isset($map['CustomStartTimePeriod'])) {
            $model->customStartTimePeriod = $map['CustomStartTimePeriod'];
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['IgnoreDeleted'])) {
            $model->ignoreDeleted = $map['IgnoreDeleted'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
