<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models;

use AlibabaCloud\SDK\EHPC\V20170714\Models\ListPreferredEcsTypesResponseBody\series;
use AlibabaCloud\Tea\Model;

class ListPreferredEcsTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var series
     */
    public $series;

    /**
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
