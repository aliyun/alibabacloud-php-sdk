<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ListPidLoopEvaluationsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderByProperty;

    /**
     * @var string
     */
    public $pidLoopName;

    /**
     * @var string
     */
    public $grade;

    /**
     * @var string
     */
    public $date;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'pidProjectId'    => 'PidProjectId',
        'order'           => 'Order',
        'orderByProperty' => 'OrderByProperty',
        'pidLoopName'     => 'PidLoopName',
        'grade'           => 'Grade',
        'date'            => 'Date',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderByProperty) {
            $res['OrderByProperty'] = $this->orderByProperty;
        }
        if (null !== $this->pidLoopName) {
            $res['PidLoopName'] = $this->pidLoopName;
        }
        if (null !== $this->grade) {
            $res['Grade'] = $this->grade;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPidLoopEvaluationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderByProperty'])) {
            $model->orderByProperty = $map['OrderByProperty'];
        }
        if (isset($map['PidLoopName'])) {
            $model->pidLoopName = $map['PidLoopName'];
        }
        if (isset($map['Grade'])) {
            $model->grade = $map['Grade'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
