<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series;
use AlibabaCloud\Tea\Model;

class ListPreferredEcsTypesResponseBody extends Model
{
    /**
     * @var bool
     */
    public $supportSpotInstance;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var series
     */
    public $series;
    protected $_name = [
        'supportSpotInstance' => 'SupportSpotInstance',
        'requestId'           => 'RequestId',
        'series'              => 'Series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportSpotInstance) {
            $res['SupportSpotInstance'] = $this->supportSpotInstance;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->series) {
            $res['Series'] = null !== $this->series ? $this->series->toMap() : null;
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
        if (isset($map['SupportSpotInstance'])) {
            $model->supportSpotInstance = $map['SupportSpotInstance'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Series'])) {
            $model->series = series::fromMap($map['Series']);
        }

        return $model;
    }
}
