<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagTrafficTopNResponseBody\trafficTopN;

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
        'requestId' => 'RequestId',
        'trafficTopN' => 'TrafficTopN',
    ];

    public function validate()
    {
        if (\is_array($this->trafficTopN)) {
            Model::validateArray($this->trafficTopN);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficTopN) {
            if (\is_array($this->trafficTopN)) {
                $res['TrafficTopN'] = [];
                $n1 = 0;
                foreach ($this->trafficTopN as $item1) {
                    $res['TrafficTopN'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TrafficTopN'])) {
            if (!empty($map['TrafficTopN'])) {
                $model->trafficTopN = [];
                $n1 = 0;
                foreach ($map['TrafficTopN'] as $item1) {
                    $model->trafficTopN[$n1] = trafficTopN::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
