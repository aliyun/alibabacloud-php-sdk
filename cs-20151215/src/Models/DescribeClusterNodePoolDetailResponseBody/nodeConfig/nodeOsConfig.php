<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\nodeConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\Hugepage;

class nodeOsConfig extends Model
{
    /**
     * @var Hugepage
     */
    public $hugepage;
    protected $_name = [
        'hugepage' => 'hugepage',
    ];

    public function validate()
    {
        if (null !== $this->hugepage) {
            $this->hugepage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hugepage) {
            $res['hugepage'] = null !== $this->hugepage ? $this->hugepage->toArray($noStream) : $this->hugepage;
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
        if (isset($map['hugepage'])) {
            $model->hugepage = Hugepage::fromMap($map['hugepage']);
        }

        return $model;
    }
}
