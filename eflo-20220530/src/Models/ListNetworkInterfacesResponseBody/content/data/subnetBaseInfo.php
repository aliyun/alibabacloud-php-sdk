<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListNetworkInterfacesResponseBody\content\data;

use AlibabaCloud\Dara\Model;

class subnetBaseInfo extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $subnetId;

    /**
     * @var string
     */
    public $subnetName;
    protected $_name = [
        'cidr' => 'Cidr',
        'createTime' => 'CreateTime',
        'subnetId' => 'SubnetId',
        'subnetName' => 'SubnetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
        }

        return $model;
    }
}
