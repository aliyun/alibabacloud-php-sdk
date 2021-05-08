<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsByIpResponseBody;

use AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsByIpResponseBody\endpointList\itemEndpoint;
use AlibabaCloud\Tea\Model;

class endpointList extends Model
{
    /**
     * @var itemEndpoint[]
     */
    public $itemEndpoint;
    protected $_name = [
        'itemEndpoint' => 'ItemEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemEndpoint) {
            $res['ItemEndpoint'] = [];
            if (null !== $this->itemEndpoint && \is_array($this->itemEndpoint)) {
                $n = 0;
                foreach ($this->itemEndpoint as $item) {
                    $res['ItemEndpoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemEndpoint'])) {
            if (!empty($map['ItemEndpoint'])) {
                $model->itemEndpoint = [];
                $n                   = 0;
                foreach ($map['ItemEndpoint'] as $item) {
                    $model->itemEndpoint[$n++] = null !== $item ? itemEndpoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
