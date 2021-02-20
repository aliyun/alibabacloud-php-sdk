<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody\areaBlockConfigs;
use AlibabaCloud\Tea\Model;

class DescribeWebAreaBlockConfigsResponseBody extends Model
{
    /**
     * @var areaBlockConfigs[]
     */
    public $areaBlockConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'areaBlockConfigs' => 'AreaBlockConfigs',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaBlockConfigs) {
            $res['AreaBlockConfigs'] = [];
            if (null !== $this->areaBlockConfigs && \is_array($this->areaBlockConfigs)) {
                $n = 0;
                foreach ($this->areaBlockConfigs as $item) {
                    $res['AreaBlockConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeWebAreaBlockConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaBlockConfigs'])) {
            if (!empty($map['AreaBlockConfigs'])) {
                $model->areaBlockConfigs = [];
                $n                       = 0;
                foreach ($map['AreaBlockConfigs'] as $item) {
                    $model->areaBlockConfigs[$n++] = null !== $item ? areaBlockConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
