<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks;

use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @var string[]
     */
    public $properties;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'properties'   => 'properties',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = $map['properties'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
