<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsListResponseBody;

use AlibabaCloud\Tea\Model;

class connsList extends Model
{
    /**
     * @description The number of active connections.
     *
     * @example 3
     *
     * @var int
     */
    public $actConns;

    /**
     * @description >  This parameter is in internal preview. Do not use this parameter.
     *
     * @example 8
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
     * @example 2
     *
     * @var int
     */
    public $inActConns;

    /**
     * @description The index number of the returned data.
     *
     * @example 16506
     *
     * @var int
     */
    public $index;
    protected $_name = [
        'actConns'   => 'ActConns',
        'conns'      => 'Conns',
        'cps'        => 'Cps',
        'inActConns' => 'InActConns',
        'index'      => 'Index',
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
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connsList
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        return $model;
    }
}
