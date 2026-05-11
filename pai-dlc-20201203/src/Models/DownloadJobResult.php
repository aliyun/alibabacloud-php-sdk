<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class DownloadJobResult extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $downloadJobId;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $logCount;

    /**
     * @var string[]
     */
    public $podIds;

    /**
     * @var string[]
     */
    public $podUids;

    /**
     * @var string
     */
    public $sourceJobId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $urlExpireTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'downloadJobId' => 'DownloadJobId',
        'downloadUrl' => 'DownloadUrl',
        'endTime' => 'EndTime',
        'fileType' => 'FileType',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'logCount' => 'LogCount',
        'podIds' => 'PodIds',
        'podUids' => 'PodUids',
        'sourceJobId' => 'SourceJobId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'type' => 'Type',
        'urlExpireTime' => 'UrlExpireTime',
        'userId' => 'UserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->podIds)) {
            Model::validateArray($this->podIds);
        }
        if (\is_array($this->podUids)) {
            Model::validateArray($this->podUids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->downloadJobId) {
            $res['DownloadJobId'] = $this->downloadJobId;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }

        if (null !== $this->podIds) {
            if (\is_array($this->podIds)) {
                $res['PodIds'] = [];
                $n1 = 0;
                foreach ($this->podIds as $item1) {
                    $res['PodIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->podUids) {
            if (\is_array($this->podUids)) {
                $res['PodUids'] = [];
                $n1 = 0;
                foreach ($this->podUids as $item1) {
                    $res['PodUids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceJobId) {
            $res['SourceJobId'] = $this->sourceJobId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->urlExpireTime) {
            $res['UrlExpireTime'] = $this->urlExpireTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DownloadJobId'])) {
            $model->downloadJobId = $map['DownloadJobId'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }

        if (isset($map['PodIds'])) {
            if (!empty($map['PodIds'])) {
                $model->podIds = [];
                $n1 = 0;
                foreach ($map['PodIds'] as $item1) {
                    $model->podIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PodUids'])) {
            if (!empty($map['PodUids'])) {
                $model->podUids = [];
                $n1 = 0;
                foreach ($map['PodUids'] as $item1) {
                    $model->podUids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceJobId'])) {
            $model->sourceJobId = $map['SourceJobId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UrlExpireTime'])) {
            $model->urlExpireTime = $map['UrlExpireTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
