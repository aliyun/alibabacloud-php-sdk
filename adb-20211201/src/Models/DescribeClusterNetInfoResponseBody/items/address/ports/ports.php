<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items\address\ports;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @description The port.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **tcp**
     *   **http**
     *   **https**
     *   **mysql**
     *
     * @example mysql
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port'     => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return ports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
