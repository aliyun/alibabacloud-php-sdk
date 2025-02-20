<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryResponseBody\result;

use AlibabaCloud\Dara\Model;

class highlightTextMap extends Model
{
    /**
     * @var string
     */
    public $creatorUserId;
    /**
     * @var string
     */
    public $description;
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
    public $repoNameWithNamespace;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
