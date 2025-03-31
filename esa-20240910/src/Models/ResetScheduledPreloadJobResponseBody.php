<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ResetScheduledPreloadJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $domains;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $failedFileOss;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $insertWay;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var int
     */
    public $taskSubmitted;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $urlCount;

    /**
     * @var int
     */
    public $urlSubmitted;
    protected $_name = [
        'aliUid' => 'AliUid',
        'createdAt' => 'CreatedAt',
        'domains' => 'Domains',
        'errorInfo' => 'ErrorInfo',
        'failedFileOss' => 'FailedFileOss',
        'fileId' => 'FileId',
        'id' => 'Id',
        'insertWay' => 'InsertWay',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'siteId' => 'SiteId',
        'taskSubmitted' => 'TaskSubmitted',
        'taskType' => 'TaskType',
        'urlCount' => 'UrlCount',
        'urlSubmitted' => 'UrlSubmitted',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
