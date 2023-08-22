<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateChainRequest extends Model
{
    /**
     * @description The configuration of the delivery chain in the JSON format.
     *
     * @example chainconfig
     *
     * @var string
     */
    public $chainConfig;

    /**
     * @description The description of the delivery chain.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance.
     *
     * @example cri-4cdrlqmhn4gm****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the delivery chain.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the repository.
     *
     * @example repo1
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace.
     *
     * @example ns1
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @description Repositories in which the delivery chain does not take effect.
     *
     * @var string[]
     */
    public $scopeExclude;
    protected $_name = [
        'chainConfig'       => 'ChainConfig',
        'description'       => 'Description',
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'scopeExclude'      => 'ScopeExclude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainConfig) {
            $res['ChainConfig'] = $this->chainConfig;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->scopeExclude) {
            $res['ScopeExclude'] = $this->scopeExclude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainConfig'])) {
            $model->chainConfig = $map['ChainConfig'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['ScopeExclude'])) {
            if (!empty($map['ScopeExclude'])) {
                $model->scopeExclude = $map['ScopeExclude'];
            }
        }

        return $model;
    }
}
