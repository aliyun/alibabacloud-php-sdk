<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryResponseBody\result;

use AlibabaCloud\Tea\Model;

class highlightTextMap extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $creatorUserId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example xx
     *
     * @var string
     */
    public $readMe;

    /**
     * @example codeup/test-repo
     *
     * @var string
     */
    public $repoNameWithNamespace;

    /**
     * @example codeup/test-repo
     *
     * @var string
     */
    public $repoPath;
    protected $_name = [
        'creatorUserId'         => 'creatorUserId',
        'description'           => 'description',
        'organizationId'        => 'organizationId',
        'readMe'                => 'readMe',
        'repoNameWithNamespace' => 'repoNameWithNamespace',
        'repoPath'              => 'repoPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorUserId) {
            $res['creatorUserId'] = $this->creatorUserId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->readMe) {
            $res['readMe'] = $this->readMe;
        }
        if (null !== $this->repoNameWithNamespace) {
            $res['repoNameWithNamespace'] = $this->repoNameWithNamespace;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return highlightTextMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorUserId'])) {
            $model->creatorUserId = $map['creatorUserId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['readMe'])) {
            $model->readMe = $map['readMe'];
        }
        if (isset($map['repoNameWithNamespace'])) {
            $model->repoNameWithNamespace = $map['repoNameWithNamespace'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }

        return $model;
    }
}
