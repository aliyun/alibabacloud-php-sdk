<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @description Data redundancy type
     *
     * @example LRS
     *
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @description The description of the project.
     *
     * @example this is test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the project. The name must be unique in a region. You cannot change the name after you create the project. The name must meet the following requirements:
     *
     *   The name must be unique.
     *   It can contain only lowercase letters, digits, and hyphens (-).
     *   It must start and end with a lowercase letter or a digit.
     *   It must be 3 to 63 characters in length.
     *
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzf******sxby
     *
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
