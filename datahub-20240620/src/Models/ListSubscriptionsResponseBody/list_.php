<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models\ListSubscriptionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListSubscriptionsResponseBody\list_\subscription;

class list_ extends Model
{
    /**
     * @var subscription[]
     */
    public $subscription;
    protected $_name = [
        'subscription' => 'Subscription',
    ];

    public function validate()
    {
        if (\is_array($this->subscription)) {
            Model::validateArray($this->subscription);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subscription) {
            if (\is_array($this->subscription)) {
                $res['Subscription'] = [];
                $n1 = 0;
                foreach ($this->subscription as $item1) {
                    $res['Subscription'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Subscription'])) {
            if (!empty($map['Subscription'])) {
                $model->subscription = [];
                $n1 = 0;
                foreach ($map['Subscription'] as $item1) {
                    $model->subscription[$n1] = subscription::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
