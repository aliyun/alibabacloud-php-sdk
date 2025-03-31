<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class ListRepoSyncRuleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $targetRegionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'namespaceName' => 'NamespaceName',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'repoName' => 'RepoName',
        'targetInstanceId' => 'TargetInstanceId',
        'targetRegionId' => 'TargetRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
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

        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
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

        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
        }

        return $model;
    }
}
