<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class ListRecordResultsRequest extends Model
{
    /**
     * @example 2020-10-10
     *
     * @var string
     */
    public $createDateFrom;

    /**
     * @example 2020-10-11
     *
     * @var string
     */
    public $createDateTo;

    /**
     * @example 90c2459a-4c73-4ab7-8a6b-e550d62fbd8c
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example ads32efef43
     *
     * @var string
     */
    public $outerBusinessId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example A1899517-BB99-5D3E-A71B-97524DCB0942
     *
     * @var string
     */
    public $recordId;

    /**
     * @example LOCAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createDateFrom'  => 'CreateDateFrom',
        'createDateTo'    => 'CreateDateTo',
        'departmentId'    => 'DepartmentId',
        'outerBusinessId' => 'OuterBusinessId',
        'pageIndex'       => 'PageIndex',
        'pageSize'        => 'PageSize',
        'recordId'        => 'RecordId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDateFrom) {
            $res['CreateDateFrom'] = $this->createDateFrom;
        }
        if (null !== $this->createDateTo) {
            $res['CreateDateTo'] = $this->createDateTo;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->outerBusinessId) {
            $res['OuterBusinessId'] = $this->outerBusinessId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecordResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDateFrom'])) {
            $model->createDateFrom = $map['CreateDateFrom'];
        }
        if (isset($map['CreateDateTo'])) {
            $model->createDateTo = $map['CreateDateTo'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['OuterBusinessId'])) {
            $model->outerBusinessId = $map['OuterBusinessId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
