<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadJobsResponseBody;

use AlibabaCloud\Tea\Model;

class jobs extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 15685865xxx14622
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The time when the task was created.
     *
     * @example 2024-06-01T08:53:13Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description The domain names to be prefetched.
     *
     * @example testurl.com
     *
     * @var string
     */
    public $domains;

    /**
     * @description The error message that is returned.
     *
     * @example invalid domain:test.com
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @var int
     */
    public $executionCount;

    /**
     * @description The URL of the OSS object that stores a list of URLs that failed the conditional check for prefetching.
     *
     * @example https://xxxobject.oss-cn-reginon.aliyuncs.com/9d91_xxxxxxxxxxx_158bb6e0f97c477791209bb46bd599f7
     *
     * @var string
     */
    public $failedFileOss;

    /**
     * @description The ID of the URL list file, which can be used during downloads.
     *
     * @example 665d3b48621bccf3fe29e1a7
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The ID of the prefetch task.
     *
     * @example 665d3af3621bccf3fe29e1a4
     *
     * @var string
     */
    public $id;

    /**
     * @description The method to submit the URLs to be prefetched.
     *
     * @example oss
     *
     * @var string
     */
    public $insertWay;

    /**
     * @description The task name.
     *
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The website ID.
     *
     * @example 190007158391808
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The number of submitted prefetch tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $taskSubmitted;

    /**
     * @description The task type. Valid values: refresh and preload.
     *
     * @example preload
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The total number of URLs.
     *
     * @example 2
     *
     * @var int
     */
    public $urlCount;

    /**
     * @description The number of submitted URLs.
     *
     * @example 1
     *
     * @var int
     */
    public $urlSubmitted;
    protected $_name = [
        'aliUid' => 'AliUid',
        'createdAt' => 'CreatedAt',
        'domains' => 'Domains',
        'errorInfo' => 'ErrorInfo',
        'executionCount' => 'ExecutionCount',
        'failedFileOss' => 'FailedFileOss',
        'fileId' => 'FileId',
        'id' => 'Id',
        'insertWay' => 'InsertWay',
        'name' => 'Name',
        'siteId' => 'SiteId',
        'taskSubmitted' => 'TaskSubmitted',
        'taskType' => 'TaskType',
        'urlCount' => 'UrlCount',
        'urlSubmitted' => 'UrlSubmitted',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->executionCount) {
            $res['ExecutionCount'] = $this->executionCount;
        }
        if (null !== $this->failedFileOss) {
            $res['FailedFileOss'] = $this->failedFileOss;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->insertWay) {
            $res['InsertWay'] = $this->insertWay;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->taskSubmitted) {
            $res['TaskSubmitted'] = $this->taskSubmitted;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->urlCount) {
            $res['UrlCount'] = $this->urlCount;
        }
        if (null !== $this->urlSubmitted) {
            $res['UrlSubmitted'] = $this->urlSubmitted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Domains'])) {
            $model->domains = $map['Domains'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['ExecutionCount'])) {
            $model->executionCount = $map['ExecutionCount'];
        }
        if (isset($map['FailedFileOss'])) {
            $model->failedFileOss = $map['FailedFileOss'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InsertWay'])) {
            $model->insertWay = $map['InsertWay'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['TaskSubmitted'])) {
            $model->taskSubmitted = $map['TaskSubmitted'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UrlCount'])) {
            $model->urlCount = $map['UrlCount'];
        }
        if (isset($map['UrlSubmitted'])) {
            $model->urlSubmitted = $map['UrlSubmitted'];
        }

        return $model;
    }
}
