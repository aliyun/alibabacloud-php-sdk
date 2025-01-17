<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class MediaConvertOutputGroupDetail extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $name;
    /**
     * @var MediaConvertOutputDetail[]
     */
    public $outputs;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
        'name'    => 'Name',
        'outputs' => 'Outputs',
        'status'  => 'Status',
        'taskId'  => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1             = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1             = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1++] = MediaConvertOutputDetail::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
