<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupAttributeResponseBody\masterSlaveBackendServers;

use AlibabaCloud\Tea\Model;

class masterSlaveBackendServer extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $serverType;
    protected $_name = [
        'type'        => 'Type',
        'weight'      => 'Weight',
        'description' => 'Description',
        'port'        => 'Port',
        'serverId'    => 'ServerId',
        'serverType'  => 'ServerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterSlaveBackendServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        return $model;
    }
}
