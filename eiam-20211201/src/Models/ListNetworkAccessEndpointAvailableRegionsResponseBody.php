<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointAvailableRegionsResponseBody\regions;
use AlibabaCloud\Tea\Model;

class ListNetworkAccessEndpointAvailableRegionsResponseBody extends Model
{
    /**
     * @var regions[]
     */
    public $regions;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regions' => 'Regions',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return ListNetworkAccessEndpointAvailableRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n = 0;
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
