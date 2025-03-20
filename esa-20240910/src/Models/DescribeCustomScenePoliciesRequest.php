<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomScenePoliciesRequest extends Model
{
    /**
     * @description The number of the page to return. Valid values: **1 to 100000**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **10**. Valid values: **5**, **10**, or **20**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The rule ID.
     *
     * @example 1234****
     *
     * @var int
     */
    public $policyId;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'policyId' => 'PolicyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomScenePoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
