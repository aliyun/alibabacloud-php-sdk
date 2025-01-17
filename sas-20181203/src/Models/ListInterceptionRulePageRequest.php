<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListInterceptionRulePageRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $criteria;
    /**
     * @var string
     */
    public $criteriaType;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'criteria'     => 'Criteria',
        'criteriaType' => 'CriteriaType',
        'currentPage'  => 'CurrentPage',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->criteriaType) {
            $res['CriteriaType'] = $this->criteriaType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['CriteriaType'])) {
            $model->criteriaType = $map['CriteriaType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
