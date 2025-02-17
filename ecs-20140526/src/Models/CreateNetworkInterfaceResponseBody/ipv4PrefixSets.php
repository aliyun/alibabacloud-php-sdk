<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponseBody\ipv4PrefixSets\ipv4PrefixSet;

class ipv4PrefixSets extends Model
{
    /**
     * @var ipv4PrefixSet[]
     */
    public $ipv4PrefixSet;
    protected $_name = [
        'ipv4PrefixSet' => 'Ipv4PrefixSet',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4PrefixSet)) {
            Model::validateArray($this->ipv4PrefixSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4PrefixSet) {
            if (\is_array($this->ipv4PrefixSet)) {
                $res['Ipv4PrefixSet'] = [];
                $n1                   = 0;
                foreach ($this->ipv4PrefixSet as $item1) {
                    $res['Ipv4PrefixSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv4PrefixSet'])) {
            if (!empty($map['Ipv4PrefixSet'])) {
                $model->ipv4PrefixSet = [];
                $n1                   = 0;
                foreach ($map['Ipv4PrefixSet'] as $item1) {
                    $model->ipv4PrefixSet[$n1++] = ipv4PrefixSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
