<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Tea\Model;

class GetResolveCountSummaryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example day
     *
     * @var string
     */
    public $granularity;

    /**
     * @description This parameter is required.
     *
     * @example 7
     *
     * @var int
     */
    public $timeSpan;
    protected $_name = [
        'granularity' => 'Granularity',
        'timeSpan'    => 'TimeSpan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = $this->timeSpan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResolveCountSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['TimeSpan'])) {
            $model->timeSpan = $map['TimeSpan'];
        }

        return $model;
    }
}
