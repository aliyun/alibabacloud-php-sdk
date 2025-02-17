<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

class autoProvisioningGroups extends Model
{
    /**
     * @var autoProvisioningGroup[]
     */
    public $autoProvisioningGroup;
    protected $_name = [
        'autoProvisioningGroup' => 'AutoProvisioningGroup',
    ];

    public function validate()
    {
        if (\is_array($this->autoProvisioningGroup)) {
            Model::validateArray($this->autoProvisioningGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProvisioningGroup) {
            if (\is_array($this->autoProvisioningGroup)) {
                $res['AutoProvisioningGroup'] = [];
                $n1                           = 0;
                foreach ($this->autoProvisioningGroup as $item1) {
                    $res['AutoProvisioningGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoProvisioningGroup'])) {
            if (!empty($map['AutoProvisioningGroup'])) {
                $model->autoProvisioningGroup = [];
                $n1                           = 0;
                foreach ($map['AutoProvisioningGroup'] as $item1) {
                    $model->autoProvisioningGroup[$n1++] = autoProvisioningGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
