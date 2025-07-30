<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;

use AlibabaCloud\Tea\Model;

class portList extends Model
{
    /**
     * @description The port that is used to connect to the instance.
     *
     * @example MySQLPort
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol of the port. Valid values:
     *
     *   **HttpPort**: HTTP port.
     *   **MySQLPort**: MySQL port.
     *
     * @example 9030
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port' => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate() {}

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
     * @return portList
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
