<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePortConnsCountResponseBody extends Model
{
    /**
     * @description The number of active connections.
     *
     * @example 159
     *
     * @var int
     */
    public $actConns;

    /**
     * @description The number of concurrent connections.
     *
     * @example 46340
     *
     * @var int
     */
    public $conns;

    /**
     * @description The number of new connections.
     *
     * @example 0
     *
     * @var int
     */
    public $cps;

    /**
     * @description The number of inactive connections.
     *
     * @example 121
     *
     * @var int
     */
    public $inActConns;

    /**
     * @description The ID of the request.
     *
     * @example 48859E14-A9FB-4100-99FF-AAB75CA46776
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'actConns'   => 'ActConns',
        'conns'      => 'Conns',
        'cps'        => 'Cps',
        'inActConns' => 'InActConns',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actConns) {
            $res['ActConns'] = $this->actConns;
        }
        if (null !== $this->conns) {
            $res['Conns'] = $this->conns;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->inActConns) {
            $res['InActConns'] = $this->inActConns;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortConnsCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActConns'])) {
            $model->actConns = $map['ActConns'];
        }
        if (isset($map['Conns'])) {
            $model->conns = $map['Conns'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['InActConns'])) {
            $model->inActConns = $map['InActConns'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
