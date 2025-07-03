<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest\jobSpec;

use AlibabaCloud\Dara\Model;

class taskSpec extends Model
{
    /**
     * @var int[]
     */
    public $arrayIndex;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'arrayIndex' => 'ArrayIndex',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (\is_array($this->arrayIndex)) {
            Model::validateArray($this->arrayIndex);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            if (\is_array($this->arrayIndex)) {
                $res['ArrayIndex'] = [];
                $n1 = 0;
                foreach ($this->arrayIndex as $item1) {
                    $res['ArrayIndex'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['ArrayIndex'])) {
            if (!empty($map['ArrayIndex'])) {
                $model->arrayIndex = [];
                $n1 = 0;
                foreach ($map['ArrayIndex'] as $item1) {
                    $model->arrayIndex[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
