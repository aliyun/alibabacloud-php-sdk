<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class PutProjectResponseBody extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $CU;

    /**
     * @var string
     */
    public $serviceRole;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $billingType;
    protected $_name = [
        'project'     => 'Project',
        'modifyTime'  => 'ModifyTime',
        'type'        => 'Type',
        'CU'          => 'CU',
        'serviceRole' => 'ServiceRole',
        'requestId'   => 'RequestId',
        'endpoint'    => 'Endpoint',
        'createTime'  => 'CreateTime',
        'regionId'    => 'RegionId',
        'billingType' => 'BillingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->CU) {
            $res['CU'] = $this->CU;
        }
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CU'])) {
            $model->CU = $map['CU'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }

        return $model;
    }
}
