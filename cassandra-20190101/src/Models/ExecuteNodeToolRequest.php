<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteNodeToolRequest extends Model
{
    /**
     * @example 10056
     *
     * @var string
     */
    public $arguments;

    /**
     * @example cds-3872l6py****n4u1
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example settimeout misc
     *
     * @var string
     */
    public $command;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example core-2
     *
     * @var string
     */
    public $executeNodes;
    protected $_name = [
        'arguments'    => 'Arguments',
        'clusterId'    => 'ClusterId',
        'command'      => 'Command',
        'dataCenterId' => 'DataCenterId',
        'executeNodes' => 'ExecuteNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
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
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
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
