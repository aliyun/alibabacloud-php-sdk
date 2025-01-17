<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeIdcProbeScanResultListRequest extends Model
{
    /**
     * @var string
     */
    public $criteria;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $foundEndTime;
    /**
     * @var int
     */
    public $foundStartTime;
    /**
     * @var string
     */
    public $logicalExp;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'criteria'       => 'Criteria',
        'currentPage'    => 'CurrentPage',
        'foundEndTime'   => 'FoundEndTime',
        'foundStartTime' => 'FoundStartTime',
        'logicalExp'     => 'LogicalExp',
        'pageSize'       => 'PageSize',
        'status'         => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->foundEndTime) {
            $res['FoundEndTime'] = $this->foundEndTime;
        }

        if (null !== $this->foundStartTime) {
            $res['FoundStartTime'] = $this->foundStartTime;
        }

        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FoundEndTime'])) {
            $model->foundEndTime = $map['FoundEndTime'];
        }

        if (isset($map['FoundStartTime'])) {
            $model->foundStartTime = $map['FoundStartTime'];
        }

        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
