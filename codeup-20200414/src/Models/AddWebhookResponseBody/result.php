<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\AddWebhookResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $pushEvents;

    /**
     * @var bool
     */
    public $buildEvents;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $url;

    /**
     * @var bool
     */
    public $issuesEvents;

    /**
     * @var bool
     */
    public $tagPushEvents;

    /**
     * @var string
     */
    public $lastTestResult;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $mergeRequestsEvents;

    /**
     * @var string
     */
    public $secretToken;

    /**
     * @var bool
     */
    public $noteEvents;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $enableSslVerification;
    protected $_name = [
        'pushEvents'            => 'PushEvents',
        'buildEvents'           => 'BuildEvents',
        'projectId'             => 'ProjectId',
        'createdAt'             => 'CreatedAt',
        'url'                   => 'Url',
        'issuesEvents'          => 'IssuesEvents',
        'tagPushEvents'         => 'TagPushEvents',
        'lastTestResult'        => 'LastTestResult',
        'description'           => 'Description',
        'mergeRequestsEvents'   => 'MergeRequestsEvents',
        'secretToken'           => 'SecretToken',
        'noteEvents'            => 'NoteEvents',
        'id'                    => 'Id',
        'enableSslVerification' => 'EnableSslVerification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushEvents) {
            $res['PushEvents'] = $this->pushEvents;
        }
        if (null !== $this->buildEvents) {
            $res['BuildEvents'] = $this->buildEvents;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->issuesEvents) {
            $res['IssuesEvents'] = $this->issuesEvents;
        }
        if (null !== $this->tagPushEvents) {
            $res['TagPushEvents'] = $this->tagPushEvents;
        }
        if (null !== $this->lastTestResult) {
            $res['LastTestResult'] = $this->lastTestResult;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->mergeRequestsEvents) {
            $res['MergeRequestsEvents'] = $this->mergeRequestsEvents;
        }
        if (null !== $this->secretToken) {
            $res['SecretToken'] = $this->secretToken;
        }
        if (null !== $this->noteEvents) {
            $res['NoteEvents'] = $this->noteEvents;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->enableSslVerification) {
            $res['EnableSslVerification'] = $this->enableSslVerification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushEvents'])) {
            $model->pushEvents = $map['PushEvents'];
        }
        if (isset($map['BuildEvents'])) {
            $model->buildEvents = $map['BuildEvents'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['IssuesEvents'])) {
            $model->issuesEvents = $map['IssuesEvents'];
        }
        if (isset($map['TagPushEvents'])) {
            $model->tagPushEvents = $map['TagPushEvents'];
        }
        if (isset($map['LastTestResult'])) {
            $model->lastTestResult = $map['LastTestResult'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MergeRequestsEvents'])) {
            $model->mergeRequestsEvents = $map['MergeRequestsEvents'];
        }
        if (isset($map['SecretToken'])) {
            $model->secretToken = $map['SecretToken'];
        }
        if (isset($map['NoteEvents'])) {
            $model->noteEvents = $map['NoteEvents'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['EnableSslVerification'])) {
            $model->enableSslVerification = $map['EnableSslVerification'];
        }

        return $model;
    }
}
