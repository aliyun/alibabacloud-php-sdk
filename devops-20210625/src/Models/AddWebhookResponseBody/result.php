<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\AddWebhookResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $enableSslVerification;

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
     * @var bool
     */
    public $pushEvents;

    /**
     * @var int
     */
    public $repositoryId;

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
    public $url;
    protected $_name = [
        'enableSslVerification' => 'EnableSslVerification',
        'buildEvents'           => 'buildEvents',
        'createdAt'             => 'createdAt',
        'description'           => 'description',
        'id'                    => 'id',
        'issuesEvents'          => 'issuesEvents',
        'lastTestResult'        => 'lastTestResult',
        'mergeRequestsEvents'   => 'mergeRequestsEvents',
        'noteEvents'            => 'noteEvents',
        'pushEvents'            => 'pushEvents',
        'repositoryId'          => 'repositoryId',
        'secretToken'           => 'secretToken',
        'tagPushEvents'         => 'tagPushEvents',
        'url'                   => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSslVerification) {
            $res['EnableSslVerification'] = $this->enableSslVerification;
        }
        if (null !== $this->buildEvents) {
            $res['buildEvents'] = $this->buildEvents;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (null !== $this->pushEvents) {
            $res['pushEvents'] = $this->pushEvents;
        }
        if (null !== $this->repositoryId) {
            $res['repositoryId'] = $this->repositoryId;
        }
        if (null !== $this->secretToken) {
            $res['secretToken'] = $this->secretToken;
        }
        if (null !== $this->tagPushEvents) {
            $res['tagPushEvents'] = $this->tagPushEvents;
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
        if (isset($map['EnableSslVerification'])) {
            $model->enableSslVerification = $map['EnableSslVerification'];
        }
        if (isset($map['buildEvents'])) {
            $model->buildEvents = $map['buildEvents'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
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
        if (isset($map['pushEvents'])) {
            $model->pushEvents = $map['pushEvents'];
        }
        if (isset($map['repositoryId'])) {
            $model->repositoryId = $map['repositoryId'];
        }
        if (isset($map['secretToken'])) {
            $model->secretToken = $map['secretToken'];
        }
        if (isset($map['tagPushEvents'])) {
            $model->tagPushEvents = $map['tagPushEvents'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
