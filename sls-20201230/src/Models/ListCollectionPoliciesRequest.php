<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesRequest\attribute;
use AlibabaCloud\Tea\Model;

class ListCollectionPoliciesRequest extends Model
{
    /**
     * @var attribute
     */
    public $attribute;

    /**
     * @example access_log
     *
     * @var string
     */
    public $dataCode;

    /**
     * @example your-test-bucket1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example your_log_policy
     *
     * @var string
     */
    public $policyName;

    /**
     * @example oss
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'attribute'   => 'attribute',
        'dataCode'    => 'dataCode',
        'instanceId'  => 'instanceId',
        'pageNum'     => 'pageNum',
        'pageSize'    => 'pageSize',
        'policyName'  => 'policyName',
        'productCode' => 'productCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = null !== $this->attribute ? $this->attribute->toMap() : null;
        }
        if (null !== $this->dataCode) {
            $res['dataCode'] = $this->dataCode;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCollectionPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute'])) {
            $model->attribute = attribute::fromMap($map['attribute']);
        }
        if (isset($map['dataCode'])) {
            $model->dataCode = $map['dataCode'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        return $model;
    }
}
