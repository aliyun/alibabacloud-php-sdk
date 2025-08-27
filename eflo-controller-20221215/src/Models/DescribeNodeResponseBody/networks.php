<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponseBody;

use AlibabaCloud\Dara\Model;

class networks extends Model
{
    /**
     * @var string
     */
    public $bondName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $subnetId;

    /**
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'bondName' => 'BondName',
        'ip' => 'Ip',
        'subnetId' => 'SubnetId',
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bondName) {
            $res['BondName'] = $this->bondName;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['BondName'])) {
            $model->bondName = $map['BondName'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
