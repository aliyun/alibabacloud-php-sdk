<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class DescribeProjectResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example this is a project description
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example test_project_name
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

    /**
     * @example B897B94B-6754-5D09-AB8C-2E8186CCADC0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'description' => 'description',
        'name'        => 'name',
        'projectId'   => 'projectId',
        'requestId'   => 'requestId',
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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProjectResponseBody
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
