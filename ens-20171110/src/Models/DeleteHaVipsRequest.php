<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteHaVipsRequest extends Model
{
    /**
     * @var string[]
     */
    public $haVipIds;
    protected $_name = [
        'haVipIds' => 'HaVipIds',
    ];

    public function validate()
    {
        if (\is_array($this->haVipIds)) {
            Model::validateArray($this->haVipIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->haVipIds) {
            if (\is_array($this->haVipIds)) {
                $res['HaVipIds'] = [];
                $n1 = 0;
                foreach ($this->haVipIds as $item1) {
                    $res['HaVipIds'][$n1] = $item1;
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
        if (isset($map['HaVipIds'])) {
            if (!empty($map['HaVipIds'])) {
                $model->haVipIds = [];
                $n1 = 0;
                foreach ($map['HaVipIds'] as $item1) {
                    $model->haVipIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
