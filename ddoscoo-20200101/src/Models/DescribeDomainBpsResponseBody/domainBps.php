<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainBpsResponseBody;

use AlibabaCloud\Tea\Model;

class domainBps extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $inBps;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @example 0
     *
     * @var int
     */
    public $outBps;
    protected $_name = [
        'inBps'  => 'InBps',
        'index'  => 'Index',
        'outBps' => 'OutBps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainBps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }

        return $model;
    }
}
