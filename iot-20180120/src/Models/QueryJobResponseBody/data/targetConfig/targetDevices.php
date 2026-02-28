<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\targetConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\targetConfig\targetDevices\targetDevices;

class targetDevices extends Model
{
    /**
     * @var targetDevices[]
     */
    public $targetDevices;
    protected $_name = [
        'targetDevices' => 'targetDevices',
    ];

    public function validate()
    {
        if (\is_array($this->targetDevices)) {
            Model::validateArray($this->targetDevices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetDevices) {
            if (\is_array($this->targetDevices)) {
                $res['targetDevices'] = [];
                $n1 = 0;
                foreach ($this->targetDevices as $item1) {
                    $res['targetDevices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['targetDevices'])) {
            if (!empty($map['targetDevices'])) {
                $model->targetDevices = [];
                $n1 = 0;
                foreach ($map['targetDevices'] as $item1) {
                    $model->targetDevices[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
