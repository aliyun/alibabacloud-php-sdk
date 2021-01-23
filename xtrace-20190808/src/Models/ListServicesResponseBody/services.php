<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponseBody;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponseBody\services\service;
use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @var service[]
     */
    public $service;
    protected $_name = [
        'service' => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = [];
            if (null !== $this->service && \is_array($this->service)) {
                $n = 0;
                foreach ($this->service as $item) {
                    $res['Service'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            if (!empty($map['Service'])) {
                $model->service = [];
                $n              = 0;
                foreach ($map['Service'] as $item) {
                    $model->service[$n++] = null !== $item ? service::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
