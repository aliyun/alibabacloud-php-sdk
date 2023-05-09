<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponseBody\regionModels;
use AlibabaCloud\Tea\Model;

class ListRegionsResponseBody extends Model
{
    /**
     * @var regionModels[]
     */
    public $regionModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionModels' => 'RegionModels',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionModels) {
            $res['RegionModels'] = [];
            if (null !== $this->regionModels && \is_array($this->regionModels)) {
                $n = 0;
                foreach ($this->regionModels as $item) {
                    $res['RegionModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionModels'])) {
            if (!empty($map['RegionModels'])) {
                $model->regionModels = [];
                $n                   = 0;
                foreach ($map['RegionModels'] as $item) {
                    $model->regionModels[$n++] = null !== $item ? regionModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
