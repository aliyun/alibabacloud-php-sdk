<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListChainInstanceRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set this parameter to **ListChainInstance**.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the delivery chain started.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The name of the image repository.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The time when the delivery chain is completed.
     *
     * @example test-repo
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the delivery chain.
     *
     * @example test-namespace
     *
     * @var string
     */
    public $repoNamespaceName;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'pageNo'            => 'PageNo',
        'pageSize'          => 'PageSize',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChainInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }

        return $model;
    }
}
