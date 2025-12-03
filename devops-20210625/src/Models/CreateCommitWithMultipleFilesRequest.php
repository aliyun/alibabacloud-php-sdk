<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitWithMultipleFilesRequest\actions;

class CreateCommitWithMultipleFilesRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $commitMessage;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken' => 'accessToken',
        'actions' => 'actions',
        'branch' => 'branch',
        'commitMessage' => 'commitMessage',
        'organizationId' => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }

        if (null !== $this->commitMessage) {
            $res['commitMessage'] = $this->commitMessage;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1] = actions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }

        if (isset($map['commitMessage'])) {
            $model->commitMessage = $map['commitMessage'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
