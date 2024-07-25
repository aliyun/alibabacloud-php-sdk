<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayServiceRequest;

use AlibabaCloud\Tea\Model;

class gatewayServiceConfigs extends Model
{
    /**
     * @var string[]
     */
    public $addresses;

    /**
     * @example group-1
     *
     * @var string
     */
    public $groupName;

    /**
     * @example itemcenter-provider
     *
     * @var string
     */
    public $name;

    /**
     * @example MSE_NACOS
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'addresses' => 'addresses',
        'groupName' => 'groupName',
        'name'      => 'name',
        'namespace' => 'namespace',
        'port'      => 'port',
        'qualifier' => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addresses) {
            $res['addresses'] = $this->addresses;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayServiceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = $map['addresses'];
            }
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
