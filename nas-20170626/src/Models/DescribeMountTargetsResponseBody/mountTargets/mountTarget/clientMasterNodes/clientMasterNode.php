<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget\clientMasterNodes;

use AlibabaCloud\Tea\Model;

class clientMasterNode extends Model
{
    /**
     * @description The default logon password of the ECS instance.
     *
     * @example 12****
     *
     * @var string
     */
    public $defaultPasswd;

    /**
     * @description The ID of the ECS instance on the client management node.
     *
     * @example i-hp3i3odi5ory1buo****
     *
     * @var string
     */
    public $ecsId;

    /**
     * @description The IP address of the ECS instance on the client management node.
     *
     * @example 192.168.1.0
     *
     * @var string
     */
    public $ecsIp;
    protected $_name = [
        'defaultPasswd' => 'DefaultPasswd',
        'ecsId'         => 'EcsId',
        'ecsIp'         => 'EcsIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPasswd) {
            $res['DefaultPasswd'] = $this->defaultPasswd;
        }
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }
        if (null !== $this->ecsIp) {
            $res['EcsIp'] = $this->ecsIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientMasterNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultPasswd'])) {
            $model->defaultPasswd = $map['DefaultPasswd'];
        }
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }
        if (isset($map['EcsIp'])) {
            $model->ecsIp = $map['EcsIp'];
        }

        return $model;
    }
}
