<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 8d13b784-17a9-11ed-bc7b-acde48001122
     *
     * @var string
     */
    public $hostname;

    /**
     * @example ***
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @example e01poc-cn-i7m2wnivf0d
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'hostname'      => 'Hostname',
        'loginPassword' => 'LoginPassword',
        'nodeId'        => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
