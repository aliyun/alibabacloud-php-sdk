<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotGroupResponseBody\operationProgressSet\operationProgress\relatedItemSet;

use AlibabaCloud\Tea\Model;

class relatedItem extends Model
{
    /**
     * @description The name of the resource.
     *
     * @example SnapshotId
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource.
     *
     * @example s-j6c9lpuyxo2uxxnx****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
