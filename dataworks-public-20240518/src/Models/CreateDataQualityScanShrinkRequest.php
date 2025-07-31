<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataQualityScanShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example a-customized-uuid
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $computeResourceShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hooksShrink;

    /**
     * @example data_quality_scan_001
     *
     * @var string
     */
    public $name;

    /**
     * @example 95279527****
     *
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $parametersShrink;

    /**
     * @example 101
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $runtimeResourceShrink;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $triggerShrink;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'computeResourceShrink' => 'ComputeResource',
        'description' => 'Description',
        'hooksShrink' => 'Hooks',
        'name' => 'Name',
        'owner' => 'Owner',
        'parametersShrink' => 'Parameters',
        'projectId' => 'ProjectId',
        'runtimeResourceShrink' => 'RuntimeResource',
        'spec' => 'Spec',
        'triggerShrink' => 'Trigger',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->computeResourceShrink) {
            $res['ComputeResource'] = $this->computeResourceShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hooksShrink) {
            $res['Hooks'] = $this->hooksShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->runtimeResourceShrink) {
            $res['RuntimeResource'] = $this->runtimeResourceShrink;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->triggerShrink) {
            $res['Trigger'] = $this->triggerShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataQualityScanShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResourceShrink = $map['ComputeResource'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Hooks'])) {
            $model->hooksShrink = $map['Hooks'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RuntimeResource'])) {
            $model->runtimeResourceShrink = $map['RuntimeResource'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Trigger'])) {
            $model->triggerShrink = $map['Trigger'];
        }

        return $model;
    }
}
