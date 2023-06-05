<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListMetaDBRequest extends Model
{
    /**
     * @description The information of the metadatabases.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The ID of the E-MapReduce (EMR) cluster. You can log on to the [EMR console](https://emr.console.aliyun.com/?spm=a2c4g.11186623.0.0.965cc5c2GeiHet#/cn-hangzhou) to obtain the ID.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The ID of the request.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'projectId'      => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetaDBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
