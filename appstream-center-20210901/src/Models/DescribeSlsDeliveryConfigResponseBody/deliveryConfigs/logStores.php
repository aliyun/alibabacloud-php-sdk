<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeSlsDeliveryConfigResponseBody\deliveryConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeSlsDeliveryConfigResponseBody\deliveryConfigs\logStores\deliveryScopes;

class logStores extends Model
{
    /**
     * @var deliveryScopes[]
     */
    public $deliveryScopes;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'deliveryScopes' => 'DeliveryScopes',
        'logStoreName' => 'LogStoreName',
        'ttl' => 'Ttl',
    ];

    public function validate()
    {
        if (\is_array($this->deliveryScopes)) {
            Model::validateArray($this->deliveryScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryScopes) {
            if (\is_array($this->deliveryScopes)) {
                $res['DeliveryScopes'] = [];
                $n1 = 0;
                foreach ($this->deliveryScopes as $item1) {
                    $res['DeliveryScopes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['DeliveryScopes'])) {
            if (!empty($map['DeliveryScopes'])) {
                $model->deliveryScopes = [];
                $n1 = 0;
                foreach ($map['DeliveryScopes'] as $item1) {
                    $model->deliveryScopes[$n1] = deliveryScopes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
