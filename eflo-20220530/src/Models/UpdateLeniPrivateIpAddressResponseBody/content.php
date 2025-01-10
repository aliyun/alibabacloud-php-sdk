<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\UpdateLeniPrivateIpAddressResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Lingjun Elastic Network Interface ID.
     *
     * @example leni-1234****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description Lingjun Elastic Network Interface secondary private IP unique identifier.
     *
     * @example sip-8ylg****
     *
     * @var string
     */
    public $ipName;
    protected $_name = [
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'ipName'                    => 'IpName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }

        return $model;
    }
}
