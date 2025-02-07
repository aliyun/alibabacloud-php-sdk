<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body;

use AlibabaCloud\Dara\Model;

class deleteBehavior extends Model
{
    /**
     * @var bool
     */
    public $deleteByDefault;
    /**
     * @var bool
     */
    public $changeable;
    protected $_name = [
        'deleteByDefault' => 'delete_by_default',
        'changeable'      => 'changeable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteByDefault) {
            $res['delete_by_default'] = $this->deleteByDefault;
        }

        if (null !== $this->changeable) {
            $res['changeable'] = $this->changeable;
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
        if (isset($map['delete_by_default'])) {
            $model->deleteByDefault = $map['delete_by_default'];
        }

        if (isset($map['changeable'])) {
            $model->changeable = $map['changeable'];
        }

        return $model;
    }
}
