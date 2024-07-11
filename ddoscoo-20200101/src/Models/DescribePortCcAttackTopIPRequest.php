<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePortCcAttackTopIPRequest extends Model
{
    /**
     * @description The IP address of the Anti-DDoS Pro or Anti-DDoS Premium instance to query.
     *
     * This parameter is required.
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The maximum number of entries to return.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The attacked port.
     *
     * This parameter is required.
     * @example 6663
     *
     * @var string
     */
    public $port;

    /**
     * @description The beginning of the time range to query. Unit: seconds.
     *
     * This parameter is required.
     * @example 1678017453
     *
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'ip'             => 'Ip',
        'limit'          => 'Limit',
        'port'           => 'Port',
        'startTimestamp' => 'StartTimestamp',
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
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortCcAttackTopIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
