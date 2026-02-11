<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeTraceLocationResponseBody\regionConfigs;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->regionConfigs)) {
            Model::validateArray($this->regionConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionConfigs) {
            if (\is_array($this->regionConfigs)) {
                $res['RegionConfigs'] = [];
                $n1 = 0;
                foreach ($this->regionConfigs as $item1) {
                    $res['RegionConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionConfigs'])) {
            if (!empty($map['RegionConfigs'])) {
                $model->regionConfigs = [];
                $n1 = 0;
                foreach ($map['RegionConfigs'] as $item1) {
                    $model->regionConfigs[$n1] = regionConfigs::fromMap($item1);
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
