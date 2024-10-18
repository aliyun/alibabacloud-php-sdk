<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\servicesSpec;

use AlibabaCloud\Tea\Model;

class networkACL extends Model
{
    /**
     * @description The protocol type. Valid values:
     *
     *   **TCP**: forwards TCP packets.
     *   **UDP**: forwards UDP packets.
     *   **Any**: forwards all packets.
     *
     * This parameter is required.
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The port number.
     *
     * This parameter is required.
     * @example 3306
     *
     * @var float
     */
    public $port;

    /**
     * @description The source CIDR block.
     *
     * This parameter is required.
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'ipProtocol'   => 'IpProtocol',
        'port'         => 'Port',
        'sourceCidrIp' => 'SourceCidrIp',
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkACL
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}
