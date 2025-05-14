<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterAddonsUpgradeStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $componentIdsShrink;
    protected $_name = [
        'componentIdsShrink' => 'componentIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentIdsShrink) {
            $res['componentIds'] = $this->componentIdsShrink;
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
        if (isset($map['componentIds'])) {
            $model->componentIdsShrink = $map['componentIds'];
        }

        return $model;
    }
}
