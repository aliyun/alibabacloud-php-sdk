<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryResponseBody\result;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $lastActivityTime;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $readMe;
    /**
     * @var string
     */
    public $repoName;
    /**
     * @var string
     */
    public $repoPath;
    /**
     * @var int
     */
    public $visibilityLevel;
    protected $_name = [
        'createTime'       => 'createTime',
        'description'      => 'description',
        'lastActivityTime' => 'lastActivityTime',
        'organizationId'   => 'organizationId',
        'readMe'           => 'readMe',
        'repoName'         => 'repoName',
        'repoPath'         => 'repoPath',
        'visibilityLevel'  => 'visibilityLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->lastActivityTime) {
            $res['lastActivityTime'] = $this->lastActivityTime;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->readMe) {
            $res['readMe'] = $this->readMe;
        }

        if (null !== $this->repoName) {
            $res['repoName'] = $this->repoName;
        }

        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }

        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['lastActivityTime'])) {
            $model->lastActivityTime = $map['lastActivityTime'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['readMe'])) {
            $model->readMe = $map['readMe'];
        }

        if (isset($map['repoName'])) {
            $model->repoName = $map['repoName'];
        }

        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }

        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }

        return $model;
    }
}
