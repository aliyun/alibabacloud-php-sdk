<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class SearchOmsOpenAPIProjectsRequest extends Model
{
    /**
     * @description The types of destination data sources.
     *
     * @var string[]
     */
    public $destDbTypes;

    /**
     * @description The list of labels.
     *
     * @var string[]
     */
    public $labelIds;

    /**
     * @description The page number, which takes effect in a pagination query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page size, which takes effect in a pagination query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keyword for fuzzy search. A fuzzy search is performed based on the project ID and name.
     *
     * @example projectName
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The types of source data sources.
     *
     * @var string[]
     */
    public $sourceDbTypes;

    /**
     * @description The list of project statuses.
     *
     * @var string[]
     */
    public $statusList;

    /**
     * @description The ID of the migration instance. Generally, if you want to create a project on a public cloud, you must first purchase a migration instance.
     *
     * @example g_abcdefj***
     *
     * @var string
     */
    public $workerGradeId;
    protected $_name = [
        'destDbTypes'   => 'DestDbTypes',
        'labelIds'      => 'LabelIds',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'searchKey'     => 'SearchKey',
        'sourceDbTypes' => 'SourceDbTypes',
        'statusList'    => 'StatusList',
        'workerGradeId' => 'WorkerGradeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destDbTypes) {
            $res['DestDbTypes'] = $this->destDbTypes;
        }
        if (null !== $this->labelIds) {
            $res['LabelIds'] = $this->labelIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->sourceDbTypes) {
            $res['SourceDbTypes'] = $this->sourceDbTypes;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchOmsOpenAPIProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestDbTypes'])) {
            if (!empty($map['DestDbTypes'])) {
                $model->destDbTypes = $map['DestDbTypes'];
            }
        }
        if (isset($map['LabelIds'])) {
            if (!empty($map['LabelIds'])) {
                $model->labelIds = $map['LabelIds'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SourceDbTypes'])) {
            if (!empty($map['SourceDbTypes'])) {
                $model->sourceDbTypes = $map['SourceDbTypes'];
            }
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['WorkerGradeId'])) {
            $model->workerGradeId = $map['WorkerGradeId'];
        }

        return $model;
    }
}
