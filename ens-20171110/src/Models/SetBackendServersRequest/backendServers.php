<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersRequest;

use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $type;

    /**
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
