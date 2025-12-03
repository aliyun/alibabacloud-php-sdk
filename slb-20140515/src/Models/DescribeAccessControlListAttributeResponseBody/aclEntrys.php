<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys\aclEntry;

class aclEntrys extends Model
{
    /**
     * @var aclEntry[]
     */
    public $aclEntry;
    protected $_name = [
        'aclEntry' => 'AclEntry',
    ];

    public function validate()
    {
        if (\is_array($this->aclEntry)) {
            Model::validateArray($this->aclEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclEntry) {
            if (\is_array($this->aclEntry)) {
                $res['AclEntry'] = [];
                $n1 = 0;
                foreach ($this->aclEntry as $item1) {
                    $res['AclEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AclEntry'])) {
            if (!empty($map['AclEntry'])) {
                $model->aclEntry = [];
                $n1 = 0;
                foreach ($map['AclEntry'] as $item1) {
                    $model->aclEntry[$n1] = aclEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
