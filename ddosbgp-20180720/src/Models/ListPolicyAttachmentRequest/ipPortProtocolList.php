<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentRequest;

use AlibabaCloud\Tea\Model;

class ipPortProtocolList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 47.118.172.***
     *
     * @var string
     */
    public $ip;

    /**
     * @example 8*
     *
     * @var int
     */
    public $port;

    /**
     * @example tcp
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'ip'       => 'Ip',
        'port'     => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipPortProtocolList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
