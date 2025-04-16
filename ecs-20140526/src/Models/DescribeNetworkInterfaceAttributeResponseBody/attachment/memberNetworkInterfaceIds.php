<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\attachment;

use AlibabaCloud\Dara\Model;

class memberNetworkInterfaceIds extends Model
{
    /**
     * @var string[]
     */
    public $memberNetworkInterfaceId;
    protected $_name = [
        'memberNetworkInterfaceId' => 'MemberNetworkInterfaceId',
    ];

    public function validate()
    {
        if (\is_array($this->memberNetworkInterfaceId)) {
            Model::validateArray($this->memberNetworkInterfaceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberNetworkInterfaceId) {
            if (\is_array($this->memberNetworkInterfaceId)) {
                $res['MemberNetworkInterfaceId'] = [];
                $n1 = 0;
                foreach ($this->memberNetworkInterfaceId as $item1) {
                    $res['MemberNetworkInterfaceId'][$n1++] = $item1;
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
        if (isset($map['MemberNetworkInterfaceId'])) {
            if (!empty($map['MemberNetworkInterfaceId'])) {
                $model->memberNetworkInterfaceId = [];
                $n1 = 0;
                foreach ($map['MemberNetworkInterfaceId'] as $item1) {
                    $model->memberNetworkInterfaceId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
