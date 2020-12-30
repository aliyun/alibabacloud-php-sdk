<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagTrafficTopNResponseBody\trafficTopN;
use AlibabaCloud\Tea\Model;

class DescribeSagTrafficTopNResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficTopN[]
     */
    public $trafficTopN;
    protected $_name = [
        'requestId'   => 'RequestId',
        'trafficTopN' => 'TrafficTopN',
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
        if (null !== $this->trafficTopN) {
            $res['TrafficTopN'] = [];
            if (null !== $this->trafficTopN && \is_array($this->trafficTopN)) {
                $n = 0;
                foreach ($this->trafficTopN as $item) {
                    $res['TrafficTopN'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagTrafficTopNResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficTopN'])) {
            if (!empty($map['TrafficTopN'])) {
                $model->trafficTopN = [];
                $n                  = 0;
                foreach ($map['TrafficTopN'] as $item) {
                    $model->trafficTopN[$n++] = null !== $item ? trafficTopN::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
