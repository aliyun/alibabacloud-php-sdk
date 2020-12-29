<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponseBody\ispCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorAvailableConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ispCityNodes[]
     */
    public $ispCityNodes;
    protected $_name = [
        'requestId'    => 'RequestId',
        'ispCityNodes' => 'IspCityNodes',
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
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = [];
            if (null !== $this->ispCityNodes && \is_array($this->ispCityNodes)) {
                $n = 0;
                foreach ($this->ispCityNodes as $item) {
                    $res['IspCityNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmMonitorAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IspCityNodes'])) {
            if (!empty($map['IspCityNodes'])) {
                $model->ispCityNodes = [];
                $n                   = 0;
                foreach ($map['IspCityNodes'] as $item) {
                    $model->ispCityNodes[$n++] = null !== $item ? ispCityNodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
