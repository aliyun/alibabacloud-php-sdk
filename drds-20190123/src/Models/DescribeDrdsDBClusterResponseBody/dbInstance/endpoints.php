<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\endpoints\endpoint;
use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @var endpoint[]
     */
    public $endpoint;
    protected $_name = [
        'endpoint' => 'Endpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = [];
            if (null !== $this->endpoint && \is_array($this->endpoint)) {
                $n = 0;
                foreach ($this->endpoint as $item) {
                    $res['Endpoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            if (!empty($map['Endpoint'])) {
                $model->endpoint = [];
                $n               = 0;
                foreach ($map['Endpoint'] as $item) {
                    $model->endpoint[$n++] = null !== $item ? endpoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
