<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class CreateRayHistoryServerRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var int
     */
    public $maxRuntimeMinutes;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $storagePath;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'displayName' => 'DisplayName',
        'ecsSpec' => 'EcsSpec',
        'maxRuntimeMinutes' => 'MaxRuntimeMinutes',
        'resourceId' => 'ResourceId',
        'storagePath' => 'StoragePath',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }

        if (null !== $this->maxRuntimeMinutes) {
            $res['MaxRuntimeMinutes'] = $this->maxRuntimeMinutes;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->storagePath) {
            $res['StoragePath'] = $this->storagePath;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }

        if (isset($map['MaxRuntimeMinutes'])) {
            $model->maxRuntimeMinutes = $map['MaxRuntimeMinutes'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['StoragePath'])) {
            $model->storagePath = $map['StoragePath'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
