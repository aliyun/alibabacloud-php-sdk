<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\forwardGroupConfig;

use AlibabaCloud\Tea\Model;

class serverGroupTuples extends Model
{
    /**
     * @description The name of the header to insert. The name must be 1 to 40 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The header names specified by **InsertHeaderConfig** must be unique.
     *
     * >  You cannot set the name of the header to any of the following values (case-insensitive): `slb-id`, `slb-ip`, `x-forwarded-for`, `x-forwarded-proto`, `x-forwarded-eip`, `x-forwarded-port`, `x-forwarded-client-srcport`, `connection`, `upgrade`, `content-length`, `transfer-encoding`, `keep-alive`, `te`, `host`, `cookie`, `remoteip`, and `authority`.
     * @example sgp-k86c1ov501id6p****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The value of the header to insert.
     *
     *   If **ValueType** is set to **SystemDefined**, you can set one of the following header values:
     *
     *   **ClientSrcPort**: the client port.
     *   **ClientSrcIp**: the client IP address.
     *   **Protocol**: the request protocol (HTTP or HTTPS).
     *   **SLBId**: the ID of the ALB instance.
     *   **SLBPort**: the listening port.
     *
     *   If **ValueType** is set to **UserDefined**, you can specify a custom header value. The header value must be 1 to 128 characters in length and can contain printable characters whose ASCII character values are `greater than or equal to 32 and lower than 127`. You can use asterisks (\*) and question marks (?) as wildcards. The value cannot start or end with a space character.
     *
     *   If **ValueType** is set to **ReferenceHeader**, you can reference one of the request headers. The header value must be 1 to 128 characters in length, and can contain lowercase letters, digits, underscores (\_), and hyphens (-).
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'serverGroupId' => 'ServerGroupId',
        'weight'        => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroupTuples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
