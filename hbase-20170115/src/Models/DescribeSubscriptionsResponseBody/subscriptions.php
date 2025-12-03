<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsResponseBody\subscriptions\DBInstances;

class subscriptions extends Model
{
    /**
     * @var DBInstances[]
     */
    public $DBInstances;

    /**
     * @var string
     */
    public $mapping;

    /**
     * @var string
     */
    public $subscriptionDescription;

    /**
     * @var string
     */
    public $subscriptionId;

    /**
     * @var string
     */
    public $subscriptionStatus;

    /**
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'DBInstances' => 'DBInstances',
        'mapping' => 'Mapping',
        'subscriptionDescription' => 'SubscriptionDescription',
        'subscriptionId' => 'SubscriptionId',
        'subscriptionStatus' => 'SubscriptionStatus',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstances)) {
            Model::validateArray($this->DBInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstances) {
            if (\is_array($this->DBInstances)) {
                $res['DBInstances'] = [];
                $n1 = 0;
                foreach ($this->DBInstances as $item1) {
                    $res['DBInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mapping) {
            $res['Mapping'] = $this->mapping;
        }

        if (null !== $this->subscriptionDescription) {
            $res['SubscriptionDescription'] = $this->subscriptionDescription;
        }

        if (null !== $this->subscriptionId) {
            $res['SubscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->subscriptionStatus) {
            $res['SubscriptionStatus'] = $this->subscriptionStatus;
        }

        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
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
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n1 = 0;
                foreach ($map['DBInstances'] as $item1) {
                    $model->DBInstances[$n1] = DBInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mapping'])) {
            $model->mapping = $map['Mapping'];
        }

        if (isset($map['SubscriptionDescription'])) {
            $model->subscriptionDescription = $map['SubscriptionDescription'];
        }

        if (isset($map['SubscriptionId'])) {
            $model->subscriptionId = $map['SubscriptionId'];
        }

        if (isset($map['SubscriptionStatus'])) {
            $model->subscriptionStatus = $map['SubscriptionStatus'];
        }

        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
