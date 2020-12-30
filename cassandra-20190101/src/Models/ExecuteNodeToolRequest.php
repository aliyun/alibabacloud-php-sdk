<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteNodeToolRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var string
     */
    public $executeNodes;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'command'      => 'Command',
        'arguments'    => 'Arguments',
        'dataCenterId' => 'DataCenterId',
        'executeNodes' => 'ExecuteNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->executeNodes) {
            $res['ExecuteNodes'] = $this->executeNodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteNodeToolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['ExecuteNodes'])) {
            $model->executeNodes = $map['ExecuteNodes'];
        }

        return $model;
    }
}
