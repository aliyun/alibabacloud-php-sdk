<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordingsRequest extends Model
{
    /**
     * @example ecd-hlh41mk78dugw****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @example 20230424004441
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example false
     *
     * @var bool
     */
    public $needSignedUrl;

    /**
     * @example aGN4YzAxQGNuLWhhbmd6aG91LjExNzU5NTMyNjgzMTQ1****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example pg-gx2x1dhsmthe9****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 10
     *
     * @var int
     */
    public $signedUrlExpireMinutes;

    /**
     * @example 20230424000000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'desktopId'              => 'DesktopId',
        'endTime'                => 'EndTime',
        'maxResults'             => 'MaxResults',
        'needSignedUrl'          => 'NeedSignedUrl',
        'nextToken'              => 'NextToken',
        'policyGroupId'          => 'PolicyGroupId',
        'regionId'               => 'RegionId',
        'signedUrlExpireMinutes' => 'SignedUrlExpireMinutes',
        'startTime'              => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordingsRequest
     */
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
