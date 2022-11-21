<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryWebhookResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $buildEvents;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableSslVerification;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $issuesEvents;

    /**
     * @var string
     */
    public $lastTestResult;

    /**
     * @var bool
     */
    public $mergeRequestsEvents;

    /**
     * @var bool
     */
    public $noteEvents;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $pushEvents;

    /**
     * @var string
     */
    public $secretToken;

    /**
     * @var bool
     */
    public $tagPushEvents;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'buildEvents'           => 'buildEvents',
        'createdAt'             => 'createdAt',
        'description'           => 'description',
        'enableSslVerification' => 'enableSslVerification',
        'id'                    => 'id',
        'issuesEvents'          => 'issuesEvents',
        'lastTestResult'        => 'lastTestResult',
        'mergeRequestsEvents'   => 'mergeRequestsEvents',
        'noteEvents'            => 'noteEvents',
        'projectId'             => 'projectId',
        'pushEvents'            => 'pushEvents',
        'secretToken'           => 'secretToken',
        'tagPushEvents'         => 'tagPushEvents',
        'type'                  => 'type',
        'url'                   => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildEvents) {
            $res['buildEvents'] = $this->buildEvents;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enableSslVerification) {
            $res['enableSslVerification'] = $this->enableSslVerification;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->issuesEvents) {
            $res['issuesEvents'] = $this->issuesEvents;
        }
        if (null !== $this->lastTestResult) {
            $res['lastTestResult'] = $this->lastTestResult;
        }
        if (null !== $this->mergeRequestsEvents) {
            $res['mergeRequestsEvents'] = $this->mergeRequestsEvents;
        }
        if (null !== $this->noteEvents) {
            $res['noteEvents'] = $this->noteEvents;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->pushEvents) {
            $res['pushEvents'] = $this->pushEvents;
        }
        if (null !== $this->secretToken) {
            $res['secretToken'] = $this->secretToken;
        }
        if (null !== $this->tagPushEvents) {
            $res['tagPushEvents'] = $this->tagPushEvents;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['buildEvents'])) {
            $model->buildEvents = $map['buildEvents'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enableSslVerification'])) {
            $model->enableSslVerification = $map['enableSslVerification'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['issuesEvents'])) {
            $model->issuesEvents = $map['issuesEvents'];
        }
        if (isset($map['lastTestResult'])) {
            $model->lastTestResult = $map['lastTestResult'];
        }
        if (isset($map['mergeRequestsEvents'])) {
            $model->mergeRequestsEvents = $map['mergeRequestsEvents'];
        }
        if (isset($map['noteEvents'])) {
            $model->noteEvents = $map['noteEvents'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['pushEvents'])) {
            $model->pushEvents = $map['pushEvents'];
        }
        if (isset($map['secretToken'])) {
            $model->secretToken = $map['secretToken'];
        }
        if (isset($map['tagPushEvents'])) {
            $model->tagPushEvents = $map['tagPushEvents'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
