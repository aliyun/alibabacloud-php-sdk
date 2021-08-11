<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPoliciesResponseBody\controlPolicies;
use AlibabaCloud\Tea\Model;

class ListControlPoliciesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var controlPolicies
     */
    public $controlPolicies;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'pageSize'        => 'PageSize',
        'pageNumber'      => 'PageNumber',
        'controlPolicies' => 'ControlPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->controlPolicies) {
            $res['ControlPolicies'] = null !== $this->controlPolicies ? $this->controlPolicies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListControlPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ControlPolicies'])) {
            $model->controlPolicies = controlPolicies::fromMap($map['ControlPolicies']);
        }

        return $model;
    }
}
