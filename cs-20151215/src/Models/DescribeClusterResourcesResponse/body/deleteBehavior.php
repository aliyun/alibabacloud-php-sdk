<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body;

use AlibabaCloud\Tea\Model;

class deleteBehavior extends Model
{
    /**
     * @description Specifies whether to delete the resource by default when the cluster is deleted.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteByDefault;

    /**
     * @description Specifies whether the default behavior returned in delete_by_default can be changed.
     *
     * @example false
     *
     * @var bool
     */
    public $changeable;
    protected $_name = [
        'deleteByDefault' => 'delete_by_default',
        'changeable'      => 'changeable',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deleteBehavior
     */
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
