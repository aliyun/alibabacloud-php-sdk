<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RecoverAICInstanceRequest extends Model
{
    /**
     * @description The ID of the server.
     *
     * @example cas-instance****
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'serverId' => 'ServerId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoverAICInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
