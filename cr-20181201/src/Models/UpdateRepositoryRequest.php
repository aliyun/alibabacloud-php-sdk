<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateRepositoryRequest extends Model
{
    /**
     * @example repo-for-test
     *
     * @var string
     */
    public $detail;

    /**
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example crr-tquyps22md8p****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example dsp/domain-microapp
     *
     * @var string
     */
    public $repoName;

    /**
     * @example ejiayou-other
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $repoType;

    /**
     * @example test repo
     *
     * @var string
     */
    public $summary;

    /**
     * @example true
     *
     * @var bool
     */
    public $tagImmutability;
    protected $_name = [
        'detail'            => 'Detail',
        'instanceId'        => 'InstanceId',
        'repoId'            => 'RepoId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoType'          => 'RepoType',
        'summary'           => 'Summary',
        'tagImmutability'   => 'TagImmutability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
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

    /**
     * @param array $map
     *
     * @return UpdateRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
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
