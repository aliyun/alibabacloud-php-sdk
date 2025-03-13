<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody\data\endpoints;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @description The port used to connect to the cluster. Valid values:
     *
     *   8123: This value is returned when the value of Protocol is HttpPort.
     *   8443: This value is returned when the value of Protocol is HttpsPort.
     *   9000: This value is returned when the value of Protocol is TcpPort.
     *
     * @example 8123
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol type. Valid values:
     *
     *   HttpPort
     *   HttpsPort
     *   TcpPort
     *
     * @example HttpPort
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port' => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate(): void {}

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
