<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dop\V20221130\Models;

use AlibabaCloud\Tea\Model;

class SubmitBackfill4ApiRequest extends Model
{
    /**
     * @example 20221228
     *
     * @var string
     */
    public $end;

    /**
     * @example 1
     *
     * @var int
     */
    public $packageId;

    /**
     * @example 20221228
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'end'       => 'end',
        'packageId' => 'packageId',
        'start'     => 'start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->packageId) {
            $res['packageId'] = $this->packageId;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBackfill4ApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['packageId'])) {
            $model->packageId = $map['packageId'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
