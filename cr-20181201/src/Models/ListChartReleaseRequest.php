<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListChartReleaseRequest extends Model
{
    /**
     * @description The chart whose versions you want to query.
     *
     * @example null
     *
     * @var string
     */
    public $chart;

    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

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
    protected $_name = [
        'chart'             => 'Chart',
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
        if (null !== $this->chart) {
            $res['Chart'] = $this->chart;
        }
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
     * @return ListChartReleaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chart'])) {
            $model->chart = $map['Chart'];
        }
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
