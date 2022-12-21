<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskConfigRequest extends Model
{
    /**
     * @example { "rerun":{ "rerunEnable":true,  "rerunCount":1,   "rerunInterval":10 } }
     *
     * @var string
     */
    public $nodeConfig;

    /**
     * @example 43****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'nodeConfig' => 'NodeConfig',
        'nodeId'     => 'NodeId',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeConfig) {
            $res['NodeConfig'] = $this->nodeConfig;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeConfig'])) {
            $model->nodeConfig = $map['NodeConfig'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
