<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListVpcResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListVpcResponseBody\vpcList\vpcEntity;
use AlibabaCloud\Tea\Model;

class vpcList extends Model
{
    /**
     * @var vpcEntity[]
     */
    public $vpcEntity;
    protected $_name = [
        'vpcEntity' => 'VpcEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcEntity) {
            $res['VpcEntity'] = [];
            if (null !== $this->vpcEntity && \is_array($this->vpcEntity)) {
                $n = 0;
                foreach ($this->vpcEntity as $item) {
                    $res['VpcEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcEntity'])) {
            if (!empty($map['VpcEntity'])) {
                $model->vpcEntity = [];
                $n                = 0;
                foreach ($map['VpcEntity'] as $item) {
                    $model->vpcEntity[$n++] = null !== $item ? vpcEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
