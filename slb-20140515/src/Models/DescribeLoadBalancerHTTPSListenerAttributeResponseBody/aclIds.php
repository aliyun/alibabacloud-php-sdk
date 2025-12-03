<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerHTTPSListenerAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class aclIds extends Model
{
    /**
     * @var string[]
     */
    public $aclId;
    protected $_name = [
        'aclId' => 'AclId',
    ];

    public function validate()
    {
        if (\is_array($this->aclId)) {
            Model::validateArray($this->aclId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            if (\is_array($this->aclId)) {
                $res['AclId'] = [];
                $n1 = 0;
                foreach ($this->aclId as $item1) {
                    $res['AclId'][$n1] = $item1;
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
        if (isset($map['AclId'])) {
            if (!empty($map['AclId'])) {
                $model->aclId = [];
                $n1 = 0;
                foreach ($map['AclId'] as $item1) {
                    $model->aclId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
