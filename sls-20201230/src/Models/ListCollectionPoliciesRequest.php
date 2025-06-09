<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListCollectionPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $centralProject;

    /**
     * @var string
     */
    public $dataCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'centralProject' => 'centralProject',
        'dataCode' => 'dataCode',
        'instanceId' => 'instanceId',
        'offset' => 'offset',
        'policyName' => 'policyName',
        'productCode' => 'productCode',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->centralProject) {
            $res['centralProject'] = $this->centralProject;
        }

        if (null !== $this->dataCode) {
            $res['dataCode'] = $this->dataCode;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }

        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['centralProject'])) {
            $model->centralProject = $map['centralProject'];
        }

        if (isset($map['dataCode'])) {
            $model->dataCode = $map['dataCode'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }

        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
