<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListProjectRequest extends Model
{
    /**
     * @description The line from which the query starts. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The name of the project.
     *
     * @example ali-test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of entries per page. Default value: 100. This operation can return up to 500 projects.
     *
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'offset'          => 'offset',
        'projectName'     => 'projectName',
        'resourceGroupId' => 'resourceGroupId',
        'size'            => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
