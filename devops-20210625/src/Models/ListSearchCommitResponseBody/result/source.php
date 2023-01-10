<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchCommitResponseBody\result;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchCommitResponseBody\result\source\author;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @var author
     */
    public $author;

    /**
     * @example 2022-11-11 11:11:11
     *
     * @var string
     */
    public $authorTime;

    /**
     * @example a748f5ecb17a93900d4808944bfcc96dc158ee2d
     *
     * @var string
     */
    public $commitId;

    /**
     * @var string
     */
    public $commitMessage;

    /**
     * @example 61133b011bd96aa110f1b500
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example codeup/test-repo
     *
     * @var string
     */
    public $repoPath;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'author'         => 'author',
        'authorTime'     => 'authorTime',
        'commitId'       => 'commitId',
        'commitMessage'  => 'commitMessage',
        'organizationId' => 'organizationId',
        'repoPath'       => 'repoPath',
        'title'          => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = null !== $this->author ? $this->author->toMap() : null;
        }
        if (null !== $this->authorTime) {
            $res['authorTime'] = $this->authorTime;
        }
        if (null !== $this->commitId) {
            $res['commitId'] = $this->commitId;
        }
        if (null !== $this->commitMessage) {
            $res['commitMessage'] = $this->commitMessage;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['author'])) {
            $model->author = author::fromMap($map['author']);
        }
        if (isset($map['authorTime'])) {
            $model->authorTime = $map['authorTime'];
        }
        if (isset($map['commitId'])) {
            $model->commitId = $map['commitId'];
        }
        if (isset($map['commitMessage'])) {
            $model->commitMessage = $map['commitMessage'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
