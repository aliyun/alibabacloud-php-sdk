<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeExternalStreamURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $outProtocol;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $txId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'ip'          => 'Ip',
        'outProtocol' => 'OutProtocol',
        'port'        => 'Port',
        'profile'     => 'Profile',
        'requestId'   => 'RequestId',
        'txId'        => 'TxId',
        'url'         => 'Url',
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
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->txId) {
            $res['TxId'] = $this->txId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExternalStreamURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TxId'])) {
            $model->txId = $map['TxId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
