<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @example LRS
     *
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @example this is test
     *
     * @var string
     */
    public $description;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'dataRedundancyType' => 'dataRedundancyType',
        'description'        => 'description',
        'projectName'        => 'projectName',
        'resourceGroupId'    => 'resourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataRedundancyType) {
            $res['dataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataRedundancyType'])) {
            $model->dataRedundancyType = $map['dataRedundancyType'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}
