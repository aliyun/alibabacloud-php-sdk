<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items\virtualServerGroupList\listeners;

class virtualServerGroupList extends Model
{
    /**
     * @var listeners[]
     */
    public $listeners;

    /**
     * @var string
     */
    public $virtualServiceGroupId;

    /**
     * @var string
     */
    public $virtualServiceGroupName;
    protected $_name = [
        'listeners' => 'listeners',
        'virtualServiceGroupId' => 'virtualServiceGroupId',
        'virtualServiceGroupName' => 'virtualServiceGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->listeners)) {
            Model::validateArray($this->listeners);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listeners) {
            if (\is_array($this->listeners)) {
                $res['listeners'] = [];
                $n1 = 0;
                foreach ($this->listeners as $item1) {
                    $res['listeners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->virtualServiceGroupId) {
            $res['virtualServiceGroupId'] = $this->virtualServiceGroupId;
        }

        if (null !== $this->virtualServiceGroupName) {
            $res['virtualServiceGroupName'] = $this->virtualServiceGroupName;
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
        if (isset($map['listeners'])) {
            if (!empty($map['listeners'])) {
                $model->listeners = [];
                $n1 = 0;
                foreach ($map['listeners'] as $item1) {
                    $model->listeners[$n1] = listeners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['virtualServiceGroupId'])) {
            $model->virtualServiceGroupId = $map['virtualServiceGroupId'];
        }

        if (isset($map['virtualServiceGroupName'])) {
            $model->virtualServiceGroupName = $map['virtualServiceGroupName'];
        }

        return $model;
    }
}
