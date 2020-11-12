<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponse\reason\roleUsages\roleUsage;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description Resource
     *
     * @var string[]
     */
    public $resource;
    protected $_name = [
        'resource' => 'Resource',
    ];

    public function validate()
    {
        Model::validateRequired('resource', $this->resource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = $map['Resource'];
            }
        }

        return $model;
    }
}
