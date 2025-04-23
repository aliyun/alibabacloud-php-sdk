<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series;

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
        'requestId' => 'RequestId',
        'series' => 'Series',
        'supportSpotInstance' => 'SupportSpotInstance',
    ];

    public function validate()
    {
        if (null !== $this->series) {
            $this->series->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->series) {
            $res['Series'] = null !== $this->series ? $this->series->toArray($noStream) : $this->series;
        }

        if (null !== $this->supportSpotInstance) {
            $res['SupportSpotInstance'] = $this->supportSpotInstance;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
