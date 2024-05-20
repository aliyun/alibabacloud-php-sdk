<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example project_name
     *
     * @var string
     */
    public $name;

    /**
     * @example p-3q9jo749ne5****
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'description' => 'description',
        'name'        => 'name',
        'projectId'   => 'projectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        return $model;
    }
}
