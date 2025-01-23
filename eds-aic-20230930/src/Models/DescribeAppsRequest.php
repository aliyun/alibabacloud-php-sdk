<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $installationStatus;
    /**
     * @var string
     */
    public $MD5;
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
        if (\is_array($this->appIdList)) {
            Model::validateArray($this->appIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIdList) {
            if (\is_array($this->appIdList)) {
                $res['AppIdList'] = [];
                $n1               = 0;
                foreach ($this->appIdList as $item1) {
                    $res['AppIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = [];
                $n1               = 0;
                foreach ($map['AppIdList'] as $item1) {
                    $model->appIdList[$n1++] = $item1;
                }
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
