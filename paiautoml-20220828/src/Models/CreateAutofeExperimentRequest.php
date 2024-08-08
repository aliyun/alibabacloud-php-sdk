<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class CreateAutofeExperimentRequest extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @var AutofeExperimentConfiguration
     */
    public $autofeExperimentConfiguration;

    /**
     * @example This is an AutoFE experiment.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example my experiment x
     *
     * @var string
     */
    public $name;

    /**
     * @example 283301
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'                 => 'Accessibility',
        'autofeExperimentConfiguration' => 'AutofeExperimentConfiguration',
        'description'                   => 'Description',
        'name'                          => 'Name',
        'workspaceId'                   => 'WorkspaceId',
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
        if (null !== $this->autofeExperimentConfiguration) {
            $res['AutofeExperimentConfiguration'] = null !== $this->autofeExperimentConfiguration ? $this->autofeExperimentConfiguration->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return CreateAutofeExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['AutofeExperimentConfiguration'])) {
            $model->autofeExperimentConfiguration = AutofeExperimentConfiguration::fromMap($map['AutofeExperimentConfiguration']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
