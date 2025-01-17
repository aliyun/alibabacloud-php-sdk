<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeImageInstancesRequest extends Model
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
     * @var string
     */
    public $logicalExp;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var bool
     */
    public $scanned;
    protected $_name = [
        'criteria'    => 'Criteria',
        'currentPage' => 'CurrentPage',
        'logicalExp'  => 'LogicalExp',
        'pageSize'    => 'PageSize',
        'scanned'     => 'Scanned',
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

        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->scanned) {
            $res['Scanned'] = $this->scanned;
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

        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Scanned'])) {
            $model->scanned = $map['Scanned'];
        }

        return $model;
    }
}
