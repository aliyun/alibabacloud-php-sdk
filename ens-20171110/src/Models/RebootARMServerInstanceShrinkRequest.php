<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RebootARMServerInstanceShrinkRequest extends Model
{
    /**
     * @example cas-instance****
     *
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $serverIdsShrink;
    protected $_name = [
        'serverId'        => 'ServerId',
        'serverIdsShrink' => 'ServerIds',
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
        if (null !== $this->serverIdsShrink) {
            $res['ServerIds'] = $this->serverIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootARMServerInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIds'])) {
            $model->serverIdsShrink = $map['ServerIds'];
        }

        return $model;
    }
}
