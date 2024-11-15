<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateHaVipRequest extends Model
{
    /**
     * @example 6
     *
     * @var int
     */
    public $amount;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example 120.24.243.91
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example yourName
     *
     * @var string
     */
    public $name;

    /**
     * @example vsw-5****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount'      => 'Amount',
        'description' => 'Description',
        'ipAddress'   => 'IpAddress',
        'name'        => 'Name',
        'vSwitchId'   => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHaVipRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
