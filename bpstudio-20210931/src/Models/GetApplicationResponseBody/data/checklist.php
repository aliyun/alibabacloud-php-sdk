<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data;

use AlibabaCloud\Dara\Model;

class checklist extends Model
{
    /**
     * @var string
     */
    public $lifecycle;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $resourceCode;
    /**
     * @var string
     */
    public $resourceName;
    /**
     * @var string
     */
    public $result;
    /**
     * @var string
     */
    public $specification;
    protected $_name = [
        'lifecycle'     => 'Lifecycle',
        'region'        => 'Region',
        'remark'        => 'Remark',
        'resourceCode'  => 'ResourceCode',
        'resourceName'  => 'ResourceName',
        'result'        => 'Result',
        'specification' => 'Specification',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
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
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}
