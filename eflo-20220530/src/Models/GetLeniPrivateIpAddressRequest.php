<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class GetLeniPrivateIpAddressRequest extends Model
{
    /**
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @var string
     */
    public $ipName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'ipName' => 'IpName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }

        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }

        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
