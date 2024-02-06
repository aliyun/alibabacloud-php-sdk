<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersRequest;

use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @description The ID of the instance that is used as the backend server.
     *
     * @example i-5ze0o05xccvbljtn****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **ens**: ENS instance.
     *   **eni**: ENI.
     *
     * @example ens
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server. Default value: 100. Valid values: **0** to **100**.
     *
     * >  The value 0 indicates that requests are not forwarded to the backend server.
     * @example 20
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'serverId' => 'ServerId',
        'type'     => 'Type',
        'weight'   => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
