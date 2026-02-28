<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeJobResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeJobResponseBody\data\targetInstanceConfigs\targetInstanceConfigs;

class targetInstanceConfigs extends Model
{
    /**
     * @var targetInstanceConfigs[]
     */
    public $targetInstanceConfigs;
    protected $_name = [
        'targetInstanceConfigs' => 'targetInstanceConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->targetInstanceConfigs)) {
            Model::validateArray($this->targetInstanceConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetInstanceConfigs) {
            if (\is_array($this->targetInstanceConfigs)) {
                $res['targetInstanceConfigs'] = [];
                $n1 = 0;
                foreach ($this->targetInstanceConfigs as $item1) {
                    $res['targetInstanceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['targetInstanceConfigs'])) {
            if (!empty($map['targetInstanceConfigs'])) {
                $model->targetInstanceConfigs = [];
                $n1 = 0;
                foreach ($map['targetInstanceConfigs'] as $item1) {
                    $model->targetInstanceConfigs[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
