<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\shardingProgress;

use AlibabaCloud\Dara\Model;

class statusType extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $tips;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'tips' => 'Tips',
    ];

    public function validate()
    {
        if (\is_array($this->tips)) {
            Model::validateArray($this->tips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tips) {
            if (\is_array($this->tips)) {
                $res['Tips'] = [];
                foreach ($this->tips as $key1 => $value1) {
                    $res['Tips'][$key1] = $value1;
                }
            }
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Tips'])) {
            if (!empty($map['Tips'])) {
                $model->tips = [];
                foreach ($map['Tips'] as $key1 => $value1) {
                    $model->tips[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
