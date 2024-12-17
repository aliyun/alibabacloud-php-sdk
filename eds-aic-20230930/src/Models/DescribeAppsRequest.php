<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppsRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @example INSTALLING
     *
     * @var string
     */
    public $installationStatus;

    /**
     * @var string
     */
    public $MD5;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kU+SQXzm0H9mu/FiSc****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appIdList'          => 'AppIdList',
        'appName'            => 'AppName',
        'bizRegionId'        => 'BizRegionId',
        'installationStatus' => 'InstallationStatus',
        'MD5'                => 'MD5',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIdList) {
            $res['AppIdList'] = $this->appIdList;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->installationStatus) {
            $res['InstallationStatus'] = $this->installationStatus;
        }
        if (null !== $this->MD5) {
            $res['MD5'] = $this->MD5;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = $map['AppIdList'];
            }
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['InstallationStatus'])) {
            $model->installationStatus = $map['InstallationStatus'];
        }
        if (isset($map['MD5'])) {
            $model->MD5 = $map['MD5'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
