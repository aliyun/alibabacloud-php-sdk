<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @description Details of the regions.
     *
     * @var regions[]
     */
    public $regions;

    /**
     * @description The ID of the request.
     *
     * @example 73469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regions'   => 'Regions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regions) {
            $res['Regions'] = [];
            if (null !== $this->regions && \is_array($this->regions)) {
                $n = 0;
                foreach ($this->regions as $item) {
                    $res['Regions'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n              = 0;
                foreach ($map['Regions'] as $item) {
                    $model->regions[$n++] = null !== $item ? regions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
