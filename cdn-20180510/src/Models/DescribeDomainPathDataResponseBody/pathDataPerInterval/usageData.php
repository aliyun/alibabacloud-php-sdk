<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPathDataResponseBody\pathDataPerInterval;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @description The number of visits to the specified path.
     *
     * @example 10
     *
     * @var int
     */
    public $acc;

    /**
     * @description The path.
     *
     * @example /path/
     *
     * @var string
     */
    public $path;

    /**
     * @description The point in time.
     *
     * @example 2017-09-30T16:00:00Z
     *
     * @var string
     */
    public $time;

    /**
     * @description The amount of network traffic. Unit: bytes.
     *
     * @example 346
     *
     * @var int
     */
    public $traffic;
    protected $_name = [
        'acc'     => 'Acc',
        'path'    => 'Path',
        'time'    => 'Time',
        'traffic' => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
