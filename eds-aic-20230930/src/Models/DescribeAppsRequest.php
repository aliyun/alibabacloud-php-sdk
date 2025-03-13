<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppsRequest extends Model
{
    /**
     * @description The IDs of the applications.
     *
     * @var string[]
     */
    public $appIdList;

    /**
     * @description The name of the application.
     *
     * @example defaultAppName
     *
     * @var string
     */
    public $appName;

    /**
     * @description Region id.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The installation/uninstallation status of the application.
     *
     * Valid values:
     *
     *   INSTALLFAILED: The application failed to be installed.
     *   UNINSTALLING: The application is being uninstalled.
     *   INSTALLING: The application is being installed.
     *   UNINSTALLED: The application is uninstalled.
     *   INSTALLED: The application is installed.
     *   UNINSTALLFAILED: The application failed to be uninstalled.
     *
     * @example INSTALLING
     *
     * @var string
     */
    public $installationStatus;

    /**
     * @description The value of MD5.
     *
     * @example THCIEH73KEK3334
     *
     * @var string
     */
    public $MD5;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the parameter is left empty, the data is queried from the first entry.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kU+SQXzm0H9mu/FiSc****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The status of the application.
     *
     * Valid values:
     *
     *   FAILED: The application failed to be created.
     *   NORMAL: The application is available.
     *   CREATING: The application is being created.
     *
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
