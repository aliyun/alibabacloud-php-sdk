<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls\networkAcl;

class networkAcls extends Model
{
    /**
     * @var networkAcl[]
     */
    public $networkAcl;
    protected $_name = [
        'networkAcl' => 'NetworkAcl',
    ];

    public function validate()
    {
        if (\is_array($this->networkAcl)) {
            Model::validateArray($this->networkAcl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAcl) {
            if (\is_array($this->networkAcl)) {
                $res['NetworkAcl'] = [];
                $n1                = 0;
                foreach ($this->networkAcl as $item1) {
                    $res['NetworkAcl'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkAcl'])) {
            if (!empty($map['NetworkAcl'])) {
                $model->networkAcl = [];
                $n1                = 0;
                foreach ($map['NetworkAcl'] as $item1) {
                    $model->networkAcl[$n1++] = networkAcl::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
