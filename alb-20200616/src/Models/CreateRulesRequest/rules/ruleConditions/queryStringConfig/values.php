<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\queryStringConfig;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The type of forwarding rule. You can specify at most seven types. Valid values:
     *
     *   **Host**: Requests are forwarded based on hosts.
     *   **Path**: Requests are forwarded based on paths.
     *   **Header**: Requests are forwarded based on HTTP headers.
     *   **QueryString**: Requests are forwarded based on query strings.
     *   **Method**: Requests are forwarded based on request methods.
     *   **Cookie**: Requests are forwarded based on cookies.
     *   **SourceIp**: Requests are forwarded based on source IP addresses.
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The IP addresses or CIDR blocks.
     *
     * You can specify at most five values for **SourceIp**.
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
