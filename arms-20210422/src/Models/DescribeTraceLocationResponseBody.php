<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeTraceLocationResponseBody\regionConfigs;
use AlibabaCloud\Tea\Model;

class DescribeTraceLocationResponseBody extends Model
{
    /**
     * @var regionConfigs[]
     */
    public $regionConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionConfigs' => 'RegionConfigs',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionConfigs) {
            $res['RegionConfigs'] = [];
            if (null !== $this->regionConfigs && \is_array($this->regionConfigs)) {
                $n = 0;
                foreach ($this->regionConfigs as $item) {
                    $res['RegionConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeTraceLocationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionConfigs'])) {
            if (!empty($map['RegionConfigs'])) {
                $model->regionConfigs = [];
                $n                    = 0;
                foreach ($map['RegionConfigs'] as $item) {
                    $model->regionConfigs[$n++] = null !== $item ? regionConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
