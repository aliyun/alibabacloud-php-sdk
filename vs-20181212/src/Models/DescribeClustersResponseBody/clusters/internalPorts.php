<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class internalPorts extends Model
{
    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string[]
     */
    public $port;
    protected $_name = [
        'ipProtocol' => 'IpProtocol',
        'platform'   => 'Platform',
        'port'       => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internalPorts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Port'])) {
            if (!empty($map['Port'])) {
                $model->port = $map['Port'];
            }
        }

        return $model;
    }
}
