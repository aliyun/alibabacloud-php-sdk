<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class PutProjectRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $serviceRole;

    /**
     * @var int
     */
    public $CU;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $billingType;
    protected $_name = [
        'project'     => 'Project',
        'serviceRole' => 'ServiceRole',
        'CU'          => 'CU',
        'type'        => 'Type',
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
        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }
        if (null !== $this->CU) {
            $res['CU'] = $this->CU;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }
        if (isset($map['CU'])) {
            $model->CU = $map['CU'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }

        return $model;
    }
}
