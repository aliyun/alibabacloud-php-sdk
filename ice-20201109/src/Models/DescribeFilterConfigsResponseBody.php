<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeFilterConfigsResponseBody\filterConfigs;
use AlibabaCloud\Tea\Model;

class DescribeFilterConfigsResponseBody extends Model
{
    /**
     * @var filterConfigs[]
     */
    public $filterConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'filterConfigs' => 'FilterConfigs',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterConfigs) {
            $res['FilterConfigs'] = [];
            if (null !== $this->filterConfigs && \is_array($this->filterConfigs)) {
                $n = 0;
                foreach ($this->filterConfigs as $item) {
                    $res['FilterConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFilterConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterConfigs'])) {
            if (!empty($map['FilterConfigs'])) {
                $model->filterConfigs = [];
                $n                    = 0;
                foreach ($map['FilterConfigs'] as $item) {
                    $model->filterConfigs[$n++] = null !== $item ? filterConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
