<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateHaVipResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $haVipIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'haVipIds' => 'HaVipIds',
        'requestId' => 'RequestId',
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
