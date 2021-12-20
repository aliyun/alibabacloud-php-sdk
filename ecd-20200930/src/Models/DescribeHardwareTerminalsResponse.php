<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeHardwareTerminalsResponse\hardwareTerminals;
use AlibabaCloud\Tea\Model;

class DescribeHardwareTerminalsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hardwareTerminals[]
     */
    public $hardwareTerminals;
    protected $_name = [
        'requestId'         => 'RequestId',
        'hardwareTerminals' => 'HardwareTerminals',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('hardwareTerminals', $this->hardwareTerminals, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hardwareTerminals) {
            $res['HardwareTerminals'] = [];
            if (null !== $this->hardwareTerminals && \is_array($this->hardwareTerminals)) {
                $n = 0;
                foreach ($this->hardwareTerminals as $item) {
                    $res['HardwareTerminals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHardwareTerminalsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HardwareTerminals'])) {
            if (!empty($map['HardwareTerminals'])) {
                $model->hardwareTerminals = [];
                $n                        = 0;
                foreach ($map['HardwareTerminals'] as $item) {
                    $model->hardwareTerminals[$n++] = null !== $item ? hardwareTerminals::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
