<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\notify;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\sceneContext;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\tenantContext;

class CreateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $customFields;

    /**
     * @var notify
     */
    public $notify;

    /**
     * @var string
     */
    public $openTeamId;

    /**
     * @var string
     */
    public $openTemplateBizId;

    /**
     * @var string[]
     */
    public $processorUserIds;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var sceneContext
     */
    public $sceneContext;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'customFields' => 'CustomFields',
        'notify' => 'Notify',
        'openTeamId' => 'OpenTeamId',
        'openTemplateBizId' => 'OpenTemplateBizId',
        'processorUserIds' => 'ProcessorUserIds',
        'scene' => 'Scene',
        'sceneContext' => 'SceneContext',
        'tenantContext' => 'TenantContext',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (null !== $this->notify) {
            $this->notify->validate();
        }
        if (\is_array($this->processorUserIds)) {
            Model::validateArray($this->processorUserIds);
        }
        if (null !== $this->sceneContext) {
            $this->sceneContext->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customFields) {
            $res['CustomFields'] = $this->customFields;
        }

        if (null !== $this->notify) {
            $res['Notify'] = null !== $this->notify ? $this->notify->toArray($noStream) : $this->notify;
        }

        if (null !== $this->openTeamId) {
            $res['OpenTeamId'] = $this->openTeamId;
        }

        if (null !== $this->openTemplateBizId) {
            $res['OpenTemplateBizId'] = $this->openTemplateBizId;
        }

        if (null !== $this->processorUserIds) {
            if (\is_array($this->processorUserIds)) {
                $res['ProcessorUserIds'] = [];
                $n1 = 0;
                foreach ($this->processorUserIds as $item1) {
                    $res['ProcessorUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->sceneContext) {
            $res['SceneContext'] = null !== $this->sceneContext ? $this->sceneContext->toArray($noStream) : $this->sceneContext;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CustomFields'])) {
            $model->customFields = $map['CustomFields'];
        }

        if (isset($map['Notify'])) {
            $model->notify = notify::fromMap($map['Notify']);
        }

        if (isset($map['OpenTeamId'])) {
            $model->openTeamId = $map['OpenTeamId'];
        }

        if (isset($map['OpenTemplateBizId'])) {
            $model->openTemplateBizId = $map['OpenTemplateBizId'];
        }

        if (isset($map['ProcessorUserIds'])) {
            if (!empty($map['ProcessorUserIds'])) {
                $model->processorUserIds = [];
                $n1 = 0;
                foreach ($map['ProcessorUserIds'] as $item1) {
                    $model->processorUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['SceneContext'])) {
            $model->sceneContext = sceneContext::fromMap($map['SceneContext']);
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
