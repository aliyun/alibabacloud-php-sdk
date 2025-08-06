<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;

use AlibabaCloud\Dara\Model;

class resourcePoolOptions extends Model
{
    /**
     * @var string[]
     */
    public $privatePoolIds;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'privatePoolIds' => 'PrivatePoolIds',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->privatePoolIds)) {
            Model::validateArray($this->privatePoolIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privatePoolIds) {
            if (\is_array($this->privatePoolIds)) {
                $res['PrivatePoolIds'] = [];
                $n1 = 0;
                foreach ($this->privatePoolIds as $item1) {
                    $res['PrivatePoolIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['PrivatePoolIds'])) {
            if (!empty($map['PrivatePoolIds'])) {
                $model->privatePoolIds = [];
                $n1 = 0;
                foreach ($map['PrivatePoolIds'] as $item1) {
                    $model->privatePoolIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
