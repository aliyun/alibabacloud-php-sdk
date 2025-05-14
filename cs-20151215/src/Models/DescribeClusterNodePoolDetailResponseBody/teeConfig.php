<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody;

use AlibabaCloud\Dara\Model;

class teeConfig extends Model
{
    /**
     * @var bool
     */
    public $teeEnable;
    protected $_name = [
        'teeEnable' => 'tee_enable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->teeEnable) {
            $res['tee_enable'] = $this->teeEnable;
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
        if (isset($map['tee_enable'])) {
            $model->teeEnable = $map['tee_enable'];
        }

        return $model;
    }
}
