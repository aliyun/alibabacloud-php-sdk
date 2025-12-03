<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup\associatedObjects;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup\associatedObjects\listeners\listener;

class listeners extends Model
{
    /**
     * @var listener[]
     */
    public $listener;
    protected $_name = [
        'listener' => 'Listener',
    ];

    public function validate()
    {
        if (\is_array($this->listener)) {
            Model::validateArray($this->listener);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listener) {
            if (\is_array($this->listener)) {
                $res['Listener'] = [];
                $n1 = 0;
                foreach ($this->listener as $item1) {
                    $res['Listener'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Listener'])) {
            if (!empty($map['Listener'])) {
                $model->listener = [];
                $n1 = 0;
                foreach ($map['Listener'] as $item1) {
                    $model->listener[$n1] = listener::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
