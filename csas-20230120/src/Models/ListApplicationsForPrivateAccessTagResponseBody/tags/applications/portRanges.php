<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApplicationsForPrivateAccessTagResponseBody\tags\applications;

use AlibabaCloud\Tea\Model;

class portRanges extends Model
{
    /**
     * @example 80
     *
     * @var int
     */
    public $begin;

    /**
     * @example 81
     *
     * @var int
     */
    public $end;
    protected $_name = [
        'begin' => 'Begin',
        'end'   => 'End',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portRanges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        return $model;
    }
}
