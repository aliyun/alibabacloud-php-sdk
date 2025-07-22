<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetDeadLockDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pc-bp1u5mas9exx7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example pi-bp16v3824rt73****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example AUTO
     *
     * @var string
     */
    public $source;

    /**
     * @description This parameter is required.
     *
     * @example a0e390cd5aca9ae964448f040153****
     *
     * @var string
     */
    public $textId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeId' => 'NodeId',
        'source' => 'Source',
        'textId' => 'TextId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->textId) {
            $res['TextId'] = $this->textId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeadLockDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TextId'])) {
            $model->textId = $map['TextId'];
        }

        return $model;
    }
}
