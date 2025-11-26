<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\AccosicateNetworkAclRequest\resource;

class AccosicateNetworkAclRequest extends Model
{
    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var resource[]
     */
    public $resource;
    protected $_name = [
        'networkAclId' => 'NetworkAclId',
        'resource' => 'Resource',
    ];

    public function validate()
    {
        if (\is_array($this->resource)) {
            Model::validateArray($this->resource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }

        if (null !== $this->resource) {
            if (\is_array($this->resource)) {
                $res['Resource'] = [];
                $n1 = 0;
                foreach ($this->resource as $item1) {
                    $res['Resource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }

        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n1 = 0;
                foreach ($map['Resource'] as $item1) {
                    $model->resource[$n1] = resource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
