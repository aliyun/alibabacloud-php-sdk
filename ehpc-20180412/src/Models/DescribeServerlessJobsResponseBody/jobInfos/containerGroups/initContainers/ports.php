<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\initContainers;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    /**
     * @description The port number. Valid values: 1 to 65535.
     *
     * @example 8888
     *
     * @var int
     */
    public $port;

    /**
     * @description The protocol.
     *
     * @example TCP
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
