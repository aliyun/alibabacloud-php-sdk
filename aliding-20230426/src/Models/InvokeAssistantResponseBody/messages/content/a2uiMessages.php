<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages\appendDataModel;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages\createSurface;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages\deleteSurface;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages\updateComponents;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\a2uiMessages\updateDataModel;

class a2uiMessages extends Model
{
    /**
     * @var appendDataModel
     */
    public $appendDataModel;

    /**
     * @var createSurface
     */
    public $createSurface;

    /**
     * @var deleteSurface
     */
    public $deleteSurface;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var updateComponents
     */
    public $updateComponents;

    /**
     * @var updateDataModel
     */
    public $updateDataModel;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appendDataModel' => 'appendDataModel',
        'createSurface' => 'createSurface',
        'deleteSurface' => 'deleteSurface',
        'profile' => 'profile',
        'updateComponents' => 'updateComponents',
        'updateDataModel' => 'updateDataModel',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->appendDataModel) {
            $this->appendDataModel->validate();
        }
        if (null !== $this->createSurface) {
            $this->createSurface->validate();
        }
        if (null !== $this->deleteSurface) {
            $this->deleteSurface->validate();
        }
        if (null !== $this->updateComponents) {
            $this->updateComponents->validate();
        }
        if (null !== $this->updateDataModel) {
            $this->updateDataModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appendDataModel) {
            $res['appendDataModel'] = null !== $this->appendDataModel ? $this->appendDataModel->toArray($noStream) : $this->appendDataModel;
        }

        if (null !== $this->createSurface) {
            $res['createSurface'] = null !== $this->createSurface ? $this->createSurface->toArray($noStream) : $this->createSurface;
        }

        if (null !== $this->deleteSurface) {
            $res['deleteSurface'] = null !== $this->deleteSurface ? $this->deleteSurface->toArray($noStream) : $this->deleteSurface;
        }

        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }

        if (null !== $this->updateComponents) {
            $res['updateComponents'] = null !== $this->updateComponents ? $this->updateComponents->toArray($noStream) : $this->updateComponents;
        }

        if (null !== $this->updateDataModel) {
            $res['updateDataModel'] = null !== $this->updateDataModel ? $this->updateDataModel->toArray($noStream) : $this->updateDataModel;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['appendDataModel'])) {
            $model->appendDataModel = appendDataModel::fromMap($map['appendDataModel']);
        }

        if (isset($map['createSurface'])) {
            $model->createSurface = createSurface::fromMap($map['createSurface']);
        }

        if (isset($map['deleteSurface'])) {
            $model->deleteSurface = deleteSurface::fromMap($map['deleteSurface']);
        }

        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }

        if (isset($map['updateComponents'])) {
            $model->updateComponents = updateComponents::fromMap($map['updateComponents']);
        }

        if (isset($map['updateDataModel'])) {
            $model->updateDataModel = updateDataModel::fromMap($map['updateDataModel']);
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
