<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListGroupRepositoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $archived;

    /**
     * @example 10
     *
     * @var int
     */
    public $commitCount;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 19238
     *
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example https://xxx/test/test
     *
     * @var string
     */
    public $httpUrl;

    /**
     * @example 89616
     *
     * @var int
     */
    public $id;

    /**
     * @example http://xxx/x
     *
     * @var string
     */
    public $importUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $isStared;

    /**
     * @example true
     *
     * @var bool
     */
    public $issuesEnabled;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $lastActivityAt;

    /**
     * @example true
     *
     * @var bool
     */
    public $mergeRequestsEnabled;

    /**
     * @example test-group-repo
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameWithNamespace;

    /**
     * @example 100003
     *
     * @var bool
     */
    public $namespaceId;

    /**
     * @example test-group-repo
     *
     * @var string
     */
    public $path;

    /**
     * @example codeup-test-org/test-group-repo
     *
     * @var string
     */
    public $pathWithNamespace;

    /**
     * @example true
     *
     * @var bool
     */
    public $privateFlag;

    /**
     * @example false
     *
     * @var bool
     */
    public $snippetsEnabled;

    /**
     * @example git@xxx:xxx/test/test.git
     *
     * @var string
     */
    public $sshUrl;

    /**
     * @example 0
     *
     * @var int
     */
    public $starCount;

    /**
     * @example 2022-03-18 14:24:54
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example 0
     *
     * @var int
     */
    public $visibilityLevel;

    /**
     * @example ""
     *
     * @var string
     */
    public $webUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $wikiEnabled;
    protected $_name = [
        'archived'             => 'archived',
        'commitCount'          => 'commitCount',
        'createdAt'            => 'createdAt',
        'creatorId'            => 'creatorId',
        'description'          => 'description',
        'httpUrl'              => 'httpUrl',
        'id'                   => 'id',
        'importUrl'            => 'importUrl',
        'isStared'             => 'isStared',
        'issuesEnabled'        => 'issuesEnabled',
        'lastActivityAt'       => 'lastActivityAt',
        'mergeRequestsEnabled' => 'mergeRequestsEnabled',
        'name'                 => 'name',
        'nameWithNamespace'    => 'nameWithNamespace',
        'namespaceId'          => 'namespaceId',
        'path'                 => 'path',
        'pathWithNamespace'    => 'pathWithNamespace',
        'privateFlag'          => 'privateFlag',
        'snippetsEnabled'      => 'snippetsEnabled',
        'sshUrl'               => 'sshUrl',
        'starCount'            => 'starCount',
        'updatedAt'            => 'updatedAt',
        'visibilityLevel'      => 'visibilityLevel',
        'webUrl'               => 'webUrl',
        'wikiEnabled'          => 'wikiEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archived) {
            $res['archived'] = $this->archived;
        }
        if (null !== $this->commitCount) {
            $res['commitCount'] = $this->commitCount;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->httpUrl) {
            $res['httpUrl'] = $this->httpUrl;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->importUrl) {
            $res['importUrl'] = $this->importUrl;
        }
        if (null !== $this->isStared) {
            $res['isStared'] = $this->isStared;
        }
        if (null !== $this->issuesEnabled) {
            $res['issuesEnabled'] = $this->issuesEnabled;
        }
        if (null !== $this->lastActivityAt) {
            $res['lastActivityAt'] = $this->lastActivityAt;
        }
        if (null !== $this->mergeRequestsEnabled) {
            $res['mergeRequestsEnabled'] = $this->mergeRequestsEnabled;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameWithNamespace) {
            $res['nameWithNamespace'] = $this->nameWithNamespace;
        }
        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->pathWithNamespace) {
            $res['pathWithNamespace'] = $this->pathWithNamespace;
        }
        if (null !== $this->privateFlag) {
            $res['privateFlag'] = $this->privateFlag;
        }
        if (null !== $this->snippetsEnabled) {
            $res['snippetsEnabled'] = $this->snippetsEnabled;
        }
        if (null !== $this->sshUrl) {
            $res['sshUrl'] = $this->sshUrl;
        }
        if (null !== $this->starCount) {
            $res['starCount'] = $this->starCount;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
        }
        if (null !== $this->wikiEnabled) {
            $res['wikiEnabled'] = $this->wikiEnabled;
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
        if (isset($map['archived'])) {
            $model->archived = $map['archived'];
        }
        if (isset($map['commitCount'])) {
            $model->commitCount = $map['commitCount'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['httpUrl'])) {
            $model->httpUrl = $map['httpUrl'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['importUrl'])) {
            $model->importUrl = $map['importUrl'];
        }
        if (isset($map['isStared'])) {
            $model->isStared = $map['isStared'];
        }
        if (isset($map['issuesEnabled'])) {
            $model->issuesEnabled = $map['issuesEnabled'];
        }
        if (isset($map['lastActivityAt'])) {
            $model->lastActivityAt = $map['lastActivityAt'];
        }
        if (isset($map['mergeRequestsEnabled'])) {
            $model->mergeRequestsEnabled = $map['mergeRequestsEnabled'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameWithNamespace'])) {
            $model->nameWithNamespace = $map['nameWithNamespace'];
        }
        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['pathWithNamespace'])) {
            $model->pathWithNamespace = $map['pathWithNamespace'];
        }
        if (isset($map['privateFlag'])) {
            $model->privateFlag = $map['privateFlag'];
        }
        if (isset($map['snippetsEnabled'])) {
            $model->snippetsEnabled = $map['snippetsEnabled'];
        }
        if (isset($map['sshUrl'])) {
            $model->sshUrl = $map['sshUrl'];
        }
        if (isset($map['starCount'])) {
            $model->starCount = $map['starCount'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }
        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }
        if (isset($map['wikiEnabled'])) {
            $model->wikiEnabled = $map['wikiEnabled'];
        }

        return $model;
    }
}
