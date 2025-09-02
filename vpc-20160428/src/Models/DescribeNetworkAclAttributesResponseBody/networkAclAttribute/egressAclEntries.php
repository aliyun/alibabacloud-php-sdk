<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute\egressAclEntries\egressAclEntry;

class egressAclEntries extends Model
{
    /**
     * @var egressAclEntry[]
     */
    public $egressAclEntry;
    protected $_name = [
        'egressAclEntry' => 'EgressAclEntry',
    ];

    public function validate()
    {
        if (\is_array($this->egressAclEntry)) {
            Model::validateArray($this->egressAclEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressAclEntry) {
            if (\is_array($this->egressAclEntry)) {
                $res['EgressAclEntry'] = [];
                $n1 = 0;
                foreach ($this->egressAclEntry as $item1) {
                    $res['EgressAclEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EgressAclEntry'])) {
            if (!empty($map['EgressAclEntry'])) {
                $model->egressAclEntry = [];
                $n1 = 0;
                foreach ($map['EgressAclEntry'] as $item1) {
                    $model->egressAclEntry[$n1] = egressAclEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
