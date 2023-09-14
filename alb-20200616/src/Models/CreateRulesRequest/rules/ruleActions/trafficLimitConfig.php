<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class trafficLimitConfig extends Model
{
    /**
     * @description The allowed HTTP methods for CORS requests. Valid values:
     *
     *   **GET**
     *   **POST**
     *   **PUT**
     *   **DELETE**
     *   **HEAD**
     *   **OPTIONS**
     *   **PATCH**
     *
     * @example 80
     *
     * @var int
     */
    public $perIpQps;

    /**
     * @description The origin site that is allowed to access. You can specify an asterisk (`*`) or one or more values. The value cannot be an asterisk (`*`).
     *
     *   The value must start with `http://` or `https://` and include a valid domain name or top-level wildcard domain name, such as `*.test.abc.example.com`.
     *   You can choose to include a port number from **1** to **65535** in each value based on your business requirement.
     *
     * @example 100
     *
     * @var int
     */
    public $QPS;
    protected $_name = [
        'perIpQps' => 'PerIpQps',
        'QPS'      => 'QPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->perIpQps) {
            $res['PerIpQps'] = $this->perIpQps;
        }
        if (null !== $this->QPS) {
            $res['QPS'] = $this->QPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficLimitConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerIpQps'])) {
            $model->perIpQps = $map['PerIpQps'];
        }
        if (isset($map['QPS'])) {
            $model->QPS = $map['QPS'];
        }

        return $model;
    }
}
