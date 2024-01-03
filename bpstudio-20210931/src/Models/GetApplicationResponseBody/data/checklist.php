<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data;

use AlibabaCloud\Tea\Model;

class checklist extends Model
{
    /**
     * @description The resource tag.
     *
     * @example Create
     *
     * @var string
     */
    public $lifecycle;

    /**
     * @description The region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The message returned for verification.
     *
     * @example The ID of the region.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The service code.
     *
     * @example vpc
     *
     * @var string
     */
    public $resourceCode;

    /**
     * @description The name of the instance.
     *
     * @example vpc
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The verification result.
     *
     * @example Finish
     *
     * @var string
     */
    public $result;

    /**
     * @description The resource specifications.
     *
     * @example 192.168.0.0/16
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return checklist
     */
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
