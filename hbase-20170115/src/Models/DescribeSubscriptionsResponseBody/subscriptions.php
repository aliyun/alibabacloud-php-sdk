<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsResponseBody;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionsResponseBody\subscriptions\DBInstances;
use AlibabaCloud\Tea\Model;

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
        'DBInstances'             => 'DBInstances',
        'mapping'                 => 'Mapping',
        'subscriptionDescription' => 'SubscriptionDescription',
        'subscriptionId'          => 'SubscriptionId',
        'subscriptionStatus'      => 'SubscriptionStatus',
        'subscriptionType'        => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = [];
            if (null !== $this->DBInstances && \is_array($this->DBInstances)) {
                $n = 0;
                foreach ($this->DBInstances as $item) {
                    $res['DBInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return subscriptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n                  = 0;
                foreach ($map['DBInstances'] as $item) {
                    $model->DBInstances[$n++] = null !== $item ? DBInstances::fromMap($item) : $item;
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
