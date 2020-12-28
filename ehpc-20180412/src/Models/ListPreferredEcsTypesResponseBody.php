<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series;
use AlibabaCloud\Tea\Model;

class ListPreferredEcsTypesResponseBody extends Model
{
    /**
     * @var series[]
     */
    public $series;

    /**
     * @var bool
     */
    public $supportSpotInstance;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'series'              => 'Series',
        'supportSpotInstance' => 'SupportSpotInstance',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->series) {
            $res['Series'] = [];
            if (null !== $this->series && \is_array($this->series)) {
                $n = 0;
                foreach ($this->series as $item) {
                    $res['Series'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportSpotInstance) {
            $res['SupportSpotInstance'] = $this->supportSpotInstance;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n             = 0;
                foreach ($map['Series'] as $item) {
                    $model->series[$n++] = null !== $item ? series::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportSpotInstance'])) {
            $model->supportSpotInstance = $map['SupportSpotInstance'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
