<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateRepositoryRequest extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var bool
     */
    public $tagImmutability;
    protected $_name = [
        'detail' => 'Detail',
        'instanceId' => 'InstanceId',
        'repoName' => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoType' => 'RepoType',
        'summary' => 'Summary',
        'tagImmutability' => 'TagImmutability',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }

        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tagImmutability) {
            $res['TagImmutability'] = $this->tagImmutability;
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
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }

        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TagImmutability'])) {
            $model->tagImmutability = $map['TagImmutability'];
        }

        return $model;
    }
}
