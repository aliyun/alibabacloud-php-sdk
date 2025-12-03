<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups\masterSlaveServerGroup;

class masterSlaveServerGroups extends Model
{
    /**
     * @var masterSlaveServerGroup[]
     */
    public $masterSlaveServerGroup;
    protected $_name = [
        'masterSlaveServerGroup' => 'MasterSlaveServerGroup',
    ];

    public function validate()
    {
        if (\is_array($this->masterSlaveServerGroup)) {
            Model::validateArray($this->masterSlaveServerGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterSlaveServerGroup) {
            if (\is_array($this->masterSlaveServerGroup)) {
                $res['MasterSlaveServerGroup'] = [];
                $n1 = 0;
                foreach ($this->masterSlaveServerGroup as $item1) {
                    $res['MasterSlaveServerGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MasterSlaveServerGroup'])) {
            if (!empty($map['MasterSlaveServerGroup'])) {
                $model->masterSlaveServerGroup = [];
                $n1 = 0;
                foreach ($map['MasterSlaveServerGroup'] as $item1) {
                    $model->masterSlaveServerGroup[$n1] = masterSlaveServerGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
