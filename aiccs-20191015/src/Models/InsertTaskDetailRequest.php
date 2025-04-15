<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class InsertTaskDetailRequest extends Model
{
    /**
     * @var string
     */
    public $callInfos;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $outboundTaskId;
    protected $_name = [
        'callInfos' => 'CallInfos',
        'instanceId' => 'InstanceId',
        'outboundTaskId' => 'OutboundTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callInfos) {
            $res['CallInfos'] = $this->callInfos;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->outboundTaskId) {
            $res['OutboundTaskId'] = $this->outboundTaskId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInfos'])) {
            $model->callInfos = $map['CallInfos'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OutboundTaskId'])) {
            $model->outboundTaskId = $map['OutboundTaskId'];
        }

        return $model;
    }
}
