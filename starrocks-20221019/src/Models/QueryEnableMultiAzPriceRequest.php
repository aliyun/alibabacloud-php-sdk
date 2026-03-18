<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryEnableMultiAzPriceRequest\observers;

class QueryEnableMultiAzPriceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var observers[]
     */
    public $observers;

    /**
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'instanceId' => 'instanceId',
        'observers' => 'observers',
        'promotionOptionNo' => 'promotionOptionNo',
    ];

    public function validate()
    {
        if (\is_array($this->observers)) {
            Model::validateArray($this->observers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->observers) {
            if (\is_array($this->observers)) {
                $res['observers'] = [];
                $n1 = 0;
                foreach ($this->observers as $item1) {
                    $res['observers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->promotionOptionNo) {
            $res['promotionOptionNo'] = $this->promotionOptionNo;
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['observers'])) {
            if (!empty($map['observers'])) {
                $model->observers = [];
                $n1 = 0;
                foreach ($map['observers'] as $item1) {
                    $model->observers[$n1] = observers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['promotionOptionNo'])) {
            $model->promotionOptionNo = $map['promotionOptionNo'];
        }

        return $model;
    }
}
