<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

use AlibabaCloud\Tea\Model;

class layerOrderConfigList extends Model
{
    /**
     * @description The unique ID of the resource.
     *
     * @example k12kj31****
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the resource. Valid values:
     *
     *   **background**: background material
     *   **media**: multimedia material
     *
     * @example media
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id' => 'Id',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layerOrderConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
