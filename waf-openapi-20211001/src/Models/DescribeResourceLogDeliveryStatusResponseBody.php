<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogDeliveryStatusResponseBody\logConfigs;

class DescribeResourceLogDeliveryStatusResponseBody extends Model
{
    /**
     * @var logConfigs[]
     */
    public $logConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logConfigs' => 'LogConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->logConfigs)) {
            Model::validateArray($this->logConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logConfigs) {
            if (\is_array($this->logConfigs)) {
                $res['LogConfigs'] = [];
                $n1 = 0;
                foreach ($this->logConfigs as $item1) {
                    $res['LogConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LogConfigs'])) {
            if (!empty($map['LogConfigs'])) {
                $model->logConfigs = [];
                $n1 = 0;
                foreach ($map['LogConfigs'] as $item1) {
                    $model->logConfigs[$n1] = logConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
