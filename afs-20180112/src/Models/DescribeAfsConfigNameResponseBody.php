<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeAfsConfigNameResponseBody\configNames;
use AlibabaCloud\Tea\Model;

class DescribeAfsConfigNameResponseBody extends Model
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
     * @var string
     */
    public $bizCode;

    /**
     * @var bool
     */
    public $hasData;
    protected $_name = [
        'requestId'   => 'RequestId',
        'configNames' => 'ConfigNames',
        'bizCode'     => 'BizCode',
        'hasData'     => 'HasData',
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
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->hasData) {
            $res['HasData'] = $this->hasData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAfsConfigNameResponseBody
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['HasData'])) {
            $model->hasData = $map['HasData'];
        }

        return $model;
    }
}
