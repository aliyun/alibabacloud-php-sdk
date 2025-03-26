<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeRecordingsRequest extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bool
     */
    public $needSignedUrl;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $signedUrlExpireMinutes;

    /**
     * @var string
     */
    public $standardEndTime;

    /**
     * @var string
     */
    public $standardStartTime;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'endTime' => 'EndTime',
        'maxResults' => 'MaxResults',
        'needSignedUrl' => 'NeedSignedUrl',
        'nextToken' => 'NextToken',
        'policyGroupId' => 'PolicyGroupId',
        'regionId' => 'RegionId',
        'signedUrlExpireMinutes' => 'SignedUrlExpireMinutes',
        'standardEndTime' => 'StandardEndTime',
        'standardStartTime' => 'StandardStartTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->needSignedUrl) {
            $res['NeedSignedUrl'] = $this->needSignedUrl;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->signedUrlExpireMinutes) {
            $res['SignedUrlExpireMinutes'] = $this->signedUrlExpireMinutes;
        }

        if (null !== $this->standardEndTime) {
            $res['StandardEndTime'] = $this->standardEndTime;
        }

        if (null !== $this->standardStartTime) {
            $res['StandardStartTime'] = $this->standardStartTime;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NeedSignedUrl'])) {
            $model->needSignedUrl = $map['NeedSignedUrl'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SignedUrlExpireMinutes'])) {
            $model->signedUrlExpireMinutes = $map['SignedUrlExpireMinutes'];
        }

        if (isset($map['StandardEndTime'])) {
            $model->standardEndTime = $map['StandardEndTime'];
        }

        if (isset($map['StandardStartTime'])) {
            $model->standardStartTime = $map['StandardStartTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
