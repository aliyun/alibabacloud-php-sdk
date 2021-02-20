<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePortConnsCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $conns;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $cps;

    /**
     * @var int
     */
    public $inActConns;

    /**
     * @var int
     */
    public $actConns;
    protected $_name = [
        'conns'      => 'Conns',
        'requestId'  => 'RequestId',
        'cps'        => 'Cps',
        'inActConns' => 'InActConns',
        'actConns'   => 'ActConns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conns) {
            $res['Conns'] = $this->conns;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->inActConns) {
            $res['InActConns'] = $this->inActConns;
        }
        if (null !== $this->actConns) {
            $res['ActConns'] = $this->actConns;
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
        if (isset($map['Conns'])) {
            $model->conns = $map['Conns'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['InActConns'])) {
            $model->inActConns = $map['InActConns'];
        }
        if (isset($map['ActConns'])) {
            $model->actConns = $map['ActConns'];
        }

        return $model;
    }
}
