<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class SelectedDataStrategy extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $evalIds;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'endTime',
        'evalIds' => 'evalIds',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->evalIds)) {
            Model::validateArray($this->evalIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->evalIds) {
            if (\is_array($this->evalIds)) {
                $res['evalIds'] = [];
                $n1 = 0;
                foreach ($this->evalIds as $item1) {
                    $res['evalIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['evalIds'])) {
            if (!empty($map['evalIds'])) {
                $model->evalIds = [];
                $n1 = 0;
                foreach ($map['evalIds'] as $item1) {
                    $model->evalIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
