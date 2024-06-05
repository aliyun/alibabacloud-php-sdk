<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class insertHeaderConfig extends Model
{
    /**
     * @description Specifies whether to overwrite the request header. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $coverEnabled;

    /**
     * @description The key of the header to be inserted. The key must be 1 to 40 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The key specified in `InsertHeader` must be unique.
     *
     * > You cannot use the following header keys (case-insensitive): `slb-id`, `slb-ip`, `x-forwarded-for`, `x-forwarded-proto`, `x-forwarded-eip`, `x-forwarded-port`, `x-forwarded-client-srcport`, `connection`, `upgrade`, `content-length`, `transfer-encoding`, `keep-alive`, `te, host`, `cookie`, `remoteip`, and `authority`.
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the header to be inserted.
     *
     *   If **ValueType** is set to **SystemDefined**, you can specify one of the following header values:
     *
     *   **ClientSrcPort**: the client port.
     *   **ClientSrcIp**: the client IP address.
     *   **Protocol**: the request protocol (HTTP or HTTPS).
     *   **SLBId**: the ALB instance ID.
     *   **SLBPort**: the listener port.
     *
     *   If **ValueType** is set to **UserDefined**, you can specify a custom header value. The header value must be 1 to 128 characters in length, and can contain printable characters whose ASCII values are `greater than or equal to 32 and lower than 127`. You can use asterisks (\\*) and question marks (?) as wildcards. The value cannot start or end with a space character.
     *
     *   If **ValueType** is set to **ReferenceHeader**, you can reference one of the request headers. The header value must be 1 to 128 characters in length, and can contain lowercase letters, digits, underscores (_), and hyphens (-).
     *
     * @example UserDefined
     *
     * @var string
     */
    public $value;

    /**
     * @description The type of the header. Valid values:
     *
     *   **UserDefined**: a user-defined header
     *   **ReferenceHeader**: a header that is referenced from a request header.
     *   **SystemDefined**: a system-defined header.
     *
     * @example UserDefined
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'coverEnabled' => 'CoverEnabled',
        'key'          => 'Key',
        'value'        => 'Value',
        'valueType'    => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverEnabled) {
            $res['CoverEnabled'] = $this->coverEnabled;
        }
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
        if (isset($map['CoverEnabled'])) {
            $model->coverEnabled = $map['CoverEnabled'];
        }
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
