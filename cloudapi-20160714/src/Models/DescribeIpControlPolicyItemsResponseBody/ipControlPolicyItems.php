<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponseBody\ipControlPolicyItems\ipControlPolicyItem;

class ipControlPolicyItems extends Model
{
    /**
     * @var ipControlPolicyItem[]
     */
    public $ipControlPolicyItem;
    protected $_name = [
        'ipControlPolicyItem' => 'IpControlPolicyItem',
    ];

    public function validate()
    {
        if (\is_array($this->ipControlPolicyItem)) {
            Model::validateArray($this->ipControlPolicyItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipControlPolicyItem) {
            if (\is_array($this->ipControlPolicyItem)) {
                $res['IpControlPolicyItem'] = [];
                $n1 = 0;
                foreach ($this->ipControlPolicyItem as $item1) {
                    $res['IpControlPolicyItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IpControlPolicyItem'])) {
            if (!empty($map['IpControlPolicyItem'])) {
                $model->ipControlPolicyItem = [];
                $n1 = 0;
                foreach ($map['IpControlPolicyItem'] as $item1) {
                    $model->ipControlPolicyItem[$n1++] = ipControlPolicyItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
