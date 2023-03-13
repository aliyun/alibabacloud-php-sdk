<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponseBody;

use AlibabaCloud\Tea\Model;

class networks extends Model
{
    /**
     * @example Bond0
     *
     * @var string
     */
    public $bondName;

    /**
     * @example 47.254.235.44
     *
     * @var string
     */
    public $ip;

    /**
     * @example vsw-uf68v51fldm5egmui5a6k
     *
     * @var string
     */
    public $subnetId;

    /**
     * @example vpd-xcuhjyrj
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'bondName' => 'BondName',
        'ip'       => 'Ip',
        'subnetId' => 'SubnetId',
        'vpdId'    => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return networks
     */
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
