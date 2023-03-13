<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\nodeGroups;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example d044d220-33fd-11ed-86a6
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
     * @example e01-cn-zvp2zdpy601
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
