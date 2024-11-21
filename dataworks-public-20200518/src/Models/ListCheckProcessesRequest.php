<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListCheckProcessesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example commit-file
     *
     * @var string
     */
    public $eventCode;

    /**
     * @example 123333232
     *
     * @var string
     */
    public $operator;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 123465
     *
     * @var int
     */
    public $projectId;

    /**
     * @example True
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'eventCode'  => 'EventCode',
        'operator'   => 'Operator',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'projectId'  => 'ProjectId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckProcessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
