<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class PublishRecallManagementTableRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string[]
     */
    public $partition;

    /**
     * @var bool
     */
    public $skipThresholdCheck;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mode' => 'Mode',
        'partition' => 'Partition',
        'skipThresholdCheck' => 'SkipThresholdCheck',
    ];

    public function validate()
    {
        if (\is_array($this->partition)) {
            Model::validateArray($this->partition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->partition) {
            if (\is_array($this->partition)) {
                $res['Partition'] = [];
                foreach ($this->partition as $key1 => $value1) {
                    $res['Partition'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->skipThresholdCheck) {
            $res['SkipThresholdCheck'] = $this->skipThresholdCheck;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Partition'])) {
            if (!empty($map['Partition'])) {
                $model->partition = [];
                foreach ($map['Partition'] as $key1 => $value1) {
                    $model->partition[$key1] = $value1;
                }
            }
        }

        if (isset($map['SkipThresholdCheck'])) {
            $model->skipThresholdCheck = $map['SkipThresholdCheck'];
        }

        return $model;
    }
}
