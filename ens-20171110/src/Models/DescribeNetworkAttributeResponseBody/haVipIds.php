<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class haVipIds extends Model
{
    /**
     * @var string[]
     */
    public $haVipId;
    protected $_name = [
        'haVipId' => 'HaVipId',
    ];

    public function validate()
    {
        if (\is_array($this->haVipId)) {
            Model::validateArray($this->haVipId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->haVipId) {
            if (\is_array($this->haVipId)) {
                $res['HaVipId'] = [];
                $n1 = 0;
                foreach ($this->haVipId as $item1) {
                    $res['HaVipId'][$n1] = $item1;
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
        if (isset($map['HaVipId'])) {
            if (!empty($map['HaVipId'])) {
                $model->haVipId = [];
                $n1 = 0;
                foreach ($map['HaVipId'] as $item1) {
                    $model->haVipId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
