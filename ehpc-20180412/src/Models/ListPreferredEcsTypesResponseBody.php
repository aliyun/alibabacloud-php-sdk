<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series;
use AlibabaCloud\Tea\Model;

class ListPreferredEcsTypesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of recommended ECS instances. Each SeriesInfo element contains the recommended ECS instance types for various nodes in the E-HPC cluster.
     *
     * @var series
     */
    public $series;

    /**
     * @description Indicates whether preemptible instances are supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportSpotInstance;
    protected $_name = [
        'requestId'           => 'RequestId',
        'series'              => 'Series',
        'supportSpotInstance' => 'SupportSpotInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->series) {
            $res['Series'] = null !== $this->series ? $this->series->toMap() : null;
        }
        if (null !== $this->supportSpotInstance) {
            $res['SupportSpotInstance'] = $this->supportSpotInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPreferredEcsTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Series'])) {
            $model->series = series::fromMap($map['Series']);
        }
        if (isset($map['SupportSpotInstance'])) {
            $model->supportSpotInstance = $map['SupportSpotInstance'];
        }

        return $model;
    }
}
