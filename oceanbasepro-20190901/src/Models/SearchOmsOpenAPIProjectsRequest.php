<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class SearchOmsOpenAPIProjectsRequest extends Model
{
    /**
     * @var string[]
     */
    public $destDbTypes;

    /**
     * @var string[]
     */
    public $labelIds;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var string[]
     */
    public $sourceDbTypes;

    /**
     * @var string[]
     */
    public $statusList;

    /**
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
