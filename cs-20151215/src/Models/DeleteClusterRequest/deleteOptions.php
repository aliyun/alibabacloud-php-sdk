<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;

use AlibabaCloud\Tea\Model;

class deleteOptions extends Model
{
    /**
     * @var string
     */
    public $deleteMode;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'deleteMode'   => 'delete_mode',
        'resourceType' => 'resource_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteMode) {
            $res['delete_mode'] = $this->deleteMode;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['delete_mode'])) {
            $model->deleteMode = $map['delete_mode'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }

        return $model;
    }
}
