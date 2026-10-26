<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\RunInstanceInspectionRequest\itemOverrides;

class RunInstanceInspectionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var itemOverrides[]
     */
    public $itemOverrides;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'itemOverrides' => 'itemOverrides',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->itemOverrides)) {
            Model::validateArray($this->itemOverrides);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->itemOverrides) {
            if (\is_array($this->itemOverrides)) {
                $res['itemOverrides'] = [];
                $n1 = 0;
                foreach ($this->itemOverrides as $item1) {
                    $res['itemOverrides'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['itemOverrides'])) {
            if (!empty($map['itemOverrides'])) {
                $model->itemOverrides = [];
                $n1 = 0;
                foreach ($map['itemOverrides'] as $item1) {
                    $model->itemOverrides[$n1] = itemOverrides::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
