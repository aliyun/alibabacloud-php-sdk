<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListConnectorsResponseBody\connectors;

use AlibabaCloud\Tea\Model;

class upgradeTime extends Model
{
    /**
     * @example 23:00
     *
     * @var string
     */
    public $end;

    /**
     * @example 20:00
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'end'   => 'End',
        'start' => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
