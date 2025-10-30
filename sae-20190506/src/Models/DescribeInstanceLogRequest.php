<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstanceLogRequest extends Model
{
    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $previous;
    protected $_name = [
        'containerId' => 'ContainerId',
        'instanceId' => 'InstanceId',
        'previous' => 'Previous',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->previous) {
            $res['Previous'] = $this->previous;
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
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Previous'])) {
            $model->previous = $map['Previous'];
        }

        return $model;
    }
}
