<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions;

use AlibabaCloud\Tea\Model;

class insertHeaderConfig extends Model
{
    /**
     * @description The key of the header. The header key must be 1 to 40 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The header keys specified by **InsertHeaderConfig** must be unique.
     *
     * >  You cannot specify the following header keys: `slb-id`, `slb-ip`, `x-forwarded-for`, `x-forwarded-proto`, `x-forwarded-eip`, `x-forwarded-port`, `x-forwarded-client-srcport`, `connection`, `upgrade`, `content-length`, `transfer-encoding`, `keep-alive`, `te`, `host`, `cookie`, `remoteip`, and `authority`. The header keys are not case-sensitive.
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the header to be inserted.
     *
     *   If **ValueType** is set to **SystemDefined**, you can set the Value parameter to one of the following values:
     *
     *   **ClientSrcPort**: the client port.
     *   **ClientSrcIp**: the IP address of the client.
     *   **Protocol**: the request protocol (HTTP or HTTPS).
     *   **SLBId**: the ID of the ALB instance.
     *   **SLBPort**: the listener port.
     *
     *   If **ValueType** is set to **UserDefined**, you can specify a custom header value. The header value must be 1 to 128 characters in length, and can contain wildcard characters, such as asterisks (\\*) and question marks (?), and printable characters whose ASCII values are `larger than or equal to 32 and smaller than 127`. The header value cannot start or end with a space character.
     *
     *   If **ValueType** is set to **ReferenceHeader**, you can reference a value from request headers. The value must be 1 to 128 characters in length, and can contain lowercase letters, digits, hyphens (-), and underscores (_).
     *
     * @example UserDefined
     *
     * @var string
     */
    public $value;

    /**
     * @description The type of header. Valid values:
     *
     *   **UserDefined**: a custom header value.
     *   **ReferenceHeader**: a header value that is referenced from one of the request headers.
     *   **SystemDefined**: a header predefined by the system.
     *
     * @example UserDefined
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
