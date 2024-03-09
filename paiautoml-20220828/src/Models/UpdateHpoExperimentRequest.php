<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class UpdateHpoExperimentRequest extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example This is an AutoML HPO experiment.
     *
     * @var string
     */
    public $description;

    /**
     * @var HpoExperimentConfig
     */
    public $hpoExperimentConfiguration;

    /**
     * @example my experiment x
     *
     * @var string
     */
    public $name;

    /**
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'              => 'Accessibility',
        'description'                => 'Description',
        'hpoExperimentConfiguration' => 'HpoExperimentConfiguration',
        'name'                       => 'Name',
        'workspaceId'                => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hpoExperimentConfiguration) {
            $res['HpoExperimentConfiguration'] = null !== $this->hpoExperimentConfiguration ? $this->hpoExperimentConfiguration->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHpoExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HpoExperimentConfiguration'])) {
            $model->hpoExperimentConfiguration = HpoExperimentConfig::fromMap($map['HpoExperimentConfiguration']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
