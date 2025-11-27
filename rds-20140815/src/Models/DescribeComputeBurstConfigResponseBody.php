<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeComputeBurstConfigResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $computeBurstConfig;

    /**
     * @var bool
     */
    public $computeBurstEnabled;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'computeBurstConfig' => 'ComputeBurstConfig',
        'computeBurstEnabled' => 'ComputeBurstEnabled',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->computeBurstConfig)) {
            Model::validateArray($this->computeBurstConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeBurstConfig) {
            if (\is_array($this->computeBurstConfig)) {
                $res['ComputeBurstConfig'] = [];
                foreach ($this->computeBurstConfig as $key1 => $value1) {
                    $res['ComputeBurstConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->computeBurstEnabled) {
            $res['ComputeBurstEnabled'] = $this->computeBurstEnabled;
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
        if (isset($map['ComputeBurstConfig'])) {
            if (!empty($map['ComputeBurstConfig'])) {
                $model->computeBurstConfig = [];
                foreach ($map['ComputeBurstConfig'] as $key1 => $value1) {
                    $model->computeBurstConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['ComputeBurstEnabled'])) {
            $model->computeBurstEnabled = $map['ComputeBurstEnabled'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
