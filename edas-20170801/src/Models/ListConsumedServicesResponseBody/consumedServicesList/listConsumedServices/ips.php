<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices;

use AlibabaCloud\Tea\Model;

class ips extends Model
{
    /**
     * @var string[]
     */
    public $ip;
    protected $_name = [
        'ip' => 'ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ip'])) {
            if (!empty($map['ip'])) {
                $model->ip = $map['ip'];
            }
        }

        return $model;
    }
}
