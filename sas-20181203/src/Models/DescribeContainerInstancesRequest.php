<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerInstancesRequest extends Model
{
    /**
     * @example [{"name":"flag","value":"0|8","logicalExp":"AND"},{"name":"ecsType","value":"!8","logicalExp":"AND"}][{"name":"clusterType","value":"NotManagedKubernetes","logicalExp":"AND"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example AND
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'criteria'    => 'Criteria',
        'currentPage' => 'CurrentPage',
        'logicalExp'  => 'LogicalExp',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerInstancesRequest
     */
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

        return $model;
    }
}
