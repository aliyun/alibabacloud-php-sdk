<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeConfigNameResponseBody\configNames;
use AlibabaCloud\Tea\Model;

class DescribeConfigNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configNames[]
     */
    public $configNames;

    /**
     * @var bool
     */
    public $hasConfig;

    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'requestId'   => 'RequestId',
        'configNames' => 'ConfigNames',
        'hasConfig'   => 'HasConfig',
        'bizCode'     => 'BizCode',
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
        if (null !== $this->configNames) {
            $res['ConfigNames'] = [];
            if (null !== $this->configNames && \is_array($this->configNames)) {
                $n = 0;
                foreach ($this->configNames as $item) {
                    $res['ConfigNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasConfig) {
            $res['HasConfig'] = $this->hasConfig;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigNames'])) {
            if (!empty($map['ConfigNames'])) {
                $model->configNames = [];
                $n                  = 0;
                foreach ($map['ConfigNames'] as $item) {
                    $model->configNames[$n++] = null !== $item ? configNames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasConfig'])) {
            $model->hasConfig = $map['HasConfig'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
