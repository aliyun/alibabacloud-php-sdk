<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class SearchOmsOpenAPIProjectsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $destDbTypesShrink;

    /**
     * @var string
     */
    public $labelIdsShrink;

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
     * @var string
     */
    public $sourceDbTypesShrink;

    /**
     * @var string
     */
    public $statusListShrink;

    /**
     * @var string
     */
    public $workerGradeId;
    protected $_name = [
        'destDbTypesShrink'   => 'DestDbTypes',
        'labelIdsShrink'      => 'LabelIds',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'searchKey'           => 'SearchKey',
        'sourceDbTypesShrink' => 'SourceDbTypes',
        'statusListShrink'    => 'StatusList',
        'workerGradeId'       => 'WorkerGradeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destDbTypesShrink) {
            $res['DestDbTypes'] = $this->destDbTypesShrink;
        }
        if (null !== $this->labelIdsShrink) {
            $res['LabelIds'] = $this->labelIdsShrink;
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
        if (null !== $this->sourceDbTypesShrink) {
            $res['SourceDbTypes'] = $this->sourceDbTypesShrink;
        }
        if (null !== $this->statusListShrink) {
            $res['StatusList'] = $this->statusListShrink;
        }
        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchOmsOpenAPIProjectsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestDbTypes'])) {
            $model->destDbTypesShrink = $map['DestDbTypes'];
        }
        if (isset($map['LabelIds'])) {
            $model->labelIdsShrink = $map['LabelIds'];
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
            $model->sourceDbTypesShrink = $map['SourceDbTypes'];
        }
        if (isset($map['StatusList'])) {
            $model->statusListShrink = $map['StatusList'];
        }
        if (isset($map['WorkerGradeId'])) {
            $model->workerGradeId = $map['WorkerGradeId'];
        }

        return $model;
    }
}
