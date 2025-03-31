<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateRepoTagRequest extends Model
{
    /**
     * @var string
     */
    public $fromTag;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $toTag;
    protected $_name = [
        'fromTag' => 'FromTag',
        'instanceId' => 'InstanceId',
        'namespaceName' => 'NamespaceName',
        'repoName' => 'RepoName',
        'toTag' => 'ToTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromTag) {
            $res['FromTag'] = $this->fromTag;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->toTag) {
            $res['ToTag'] = $this->toTag;
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
        if (isset($map['FromTag'])) {
            $model->fromTag = $map['FromTag'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['ToTag'])) {
            $model->toTag = $map['ToTag'];
        }

        return $model;
    }
}
