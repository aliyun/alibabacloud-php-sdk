<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

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
    public $searchType;

    /**
     * @var string
     */
    public $searchValue;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'searchType'  => 'SearchType',
        'searchValue' => 'SearchValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->searchValue) {
            $res['SearchValue'] = $this->searchValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['SearchValue'])) {
            $model->searchValue = $map['SearchValue'];
        }

        return $model;
    }
}
