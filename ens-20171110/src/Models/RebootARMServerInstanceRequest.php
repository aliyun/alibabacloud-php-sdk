<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RebootARMServerInstanceRequest extends Model
{
    /**
     * @example cas-instance****
     *
     * @var string
     */
    public $serverId;

    /**
     * @var string[]
     */
    public $serverIds;
    protected $_name = [
        'serverId'  => 'ServerId',
        'serverIds' => 'ServerIds',
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
        if (null !== $this->serverIds) {
            $res['ServerIds'] = $this->serverIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootARMServerInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = $map['ServerIds'];
            }
        }

        return $model;
    }
}
