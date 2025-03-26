<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNetworkAclResponseBody\networkAclAttribute\ingressAclEntries\ingressAclEntry;

class ingressAclEntries extends Model
{
    /**
     * @var ingressAclEntry[]
     */
    public $ingressAclEntry;
    protected $_name = [
        'ingressAclEntry' => 'IngressAclEntry',
    ];

    public function validate()
    {
        if (\is_array($this->ingressAclEntry)) {
            Model::validateArray($this->ingressAclEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ingressAclEntry) {
            if (\is_array($this->ingressAclEntry)) {
                $res['IngressAclEntry'] = [];
                $n1 = 0;
                foreach ($this->ingressAclEntry as $item1) {
                    $res['IngressAclEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IngressAclEntry'])) {
            if (!empty($map['IngressAclEntry'])) {
                $model->ingressAclEntry = [];
                $n1 = 0;
                foreach ($map['IngressAclEntry'] as $item1) {
                    $model->ingressAclEntry[$n1++] = ingressAclEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
