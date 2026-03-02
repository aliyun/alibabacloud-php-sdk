<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpListLogResult extends Model
{
    /**
     * @var PdpLog[]
     */
    public $logs;
    protected $_name = [
        'logs' => 'logs',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['logs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['logs'])) {
            if (!empty($map['logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['logs'] as $item1) {
                    $model->logs[$n1] = PdpLog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
