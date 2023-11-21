<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class ipAddressAttributes extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'ipAddress'   => 'IpAddress',
        'networkType' => 'NetworkType',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipAddressAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
