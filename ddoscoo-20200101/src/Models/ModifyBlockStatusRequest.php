<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyBlockStatusRequest extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $lines;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'duration' => 'Duration',
        'instanceId' => 'InstanceId',
        'lines' => 'Lines',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->lines)) {
            Model::validateArray($this->lines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lines) {
            if (\is_array($this->lines)) {
                $res['Lines'] = [];
                $n1 = 0;
                foreach ($this->lines as $item1) {
                    $res['Lines'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = [];
                $n1 = 0;
                foreach ($map['Lines'] as $item1) {
                    $model->lines[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
