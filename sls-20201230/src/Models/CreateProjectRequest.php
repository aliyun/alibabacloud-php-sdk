<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $recycleBinEnabled;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'dataRedundancyType' => 'dataRedundancyType',
        'description' => 'description',
        'projectName' => 'projectName',
        'recycleBinEnabled' => 'recycleBinEnabled',
        'resourceGroupId' => 'resourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->recycleBinEnabled) {
            $res['recycleBinEnabled'] = $this->recycleBinEnabled;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['recycleBinEnabled'])) {
            $model->recycleBinEnabled = $map['recycleBinEnabled'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}
