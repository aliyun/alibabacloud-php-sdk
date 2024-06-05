<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class insertHeaderConfig extends Model
{
    /**
     * @description The key of the header. The key must be 1 to 40 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The key specified in `InsertHeader` must be unique.
     *
     * > **Cookie** and **Host** are not supported.
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the header.
     *
     *   If **ValueType** is set to **SystemDefined**, one of the following values is supported:
     *
     *   **ClientSrcPort**: the client port.
     *   **ClientSrcIp**: the client IP address.
     *   **Protocol**: the request protocol (HTTP or HTTPS).
     *   **SLBId**: the ID of the ALB instance.
     *   **SLBPort**: the listener port.
     *
     *   If **ValueType** is set to **UserDefined**, a custom header value is supported. The header value must be 1 to 128 characters in length, and can contain printable characters whose ASCII values are `greater than or equal to 32 and lower than 127`. You can use asterisks (\\*) and question marks (?) as wildcard characters. The header value cannot start or end with a space character.
     *
     *   If **ValueType** is set to **ReferenceHeader**, one of the request headers is referenced. The header value must be 1 to 128 characters in length, and can contain lowercase letters, digits, underscores (_), and hyphens (-).
     *
     * @example ClientSrcPort
     *
     * @var string
     */
    public $value;

    /**
     * @description The type of the header. Valid values:
     *
     *   **UserDefined**: a user-defined header.
     *   **ReferenceHeader**: a header that is referenced from a request header.
     *   **SystemDefined**: a system-defined header.
     *
     * @example SystemDefined
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'key'       => 'Key',
        'value'     => 'Value',
        'valueType' => 'ValueType',
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
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insertHeaderConfig
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
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
