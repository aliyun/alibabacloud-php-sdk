<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRdsVswitchesResponseBody\data;

use AlibabaCloud\Dara\Model;

class vswitchList extends Model
{
    /**
     * @var string
     */
    public $availabeIpCount;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $izNo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'availabeIpCount' => 'AvailabeIpCount',
        'cidrBlock' => 'CidrBlock',
        'description' => 'Description',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'isDefault' => 'IsDefault',
        'izNo' => 'IzNo',
        'name' => 'Name',
        'vpcInstanceId' => 'VpcInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availabeIpCount) {
            $res['AvailabeIpCount'] = $this->availabeIpCount;
        }

        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
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
        if (isset($map['AvailabeIpCount'])) {
            $model->availabeIpCount = $map['AvailabeIpCount'];
        }

        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
