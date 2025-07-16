<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\notify;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\sceneContext;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateTicketRequest extends Model
{
    /**
     * @example []
     *
     * @var string
     */
    public $customFields;

    /**
     * @var notify
     */
    public $notify;

    /**
     * @description This parameter is required.
     *
     * @example G3IOe205RLciE
     *
     * @var string
     */
    public $openTeamId;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $openTemplateBizId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $processorUserIds;

    /**
     * @description This parameter is required.
     *
     * @example SG
     *
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
     * @description This parameter is required.
     *
     * @example Killer Ball Wo Mouichido
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customFields) {
            $res['CustomFields'] = $this->customFields;
        }
        if (null !== $this->notify) {
            $res['Notify'] = null !== $this->notify ? $this->notify->toMap() : null;
        }
        if (null !== $this->openTeamId) {
            $res['OpenTeamId'] = $this->openTeamId;
        }
        if (null !== $this->openTemplateBizId) {
            $res['OpenTemplateBizId'] = $this->openTemplateBizId;
        }
        if (null !== $this->processorUserIds) {
            $res['ProcessorUserIds'] = $this->processorUserIds;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sceneContext) {
            $res['SceneContext'] = null !== $this->sceneContext ? $this->sceneContext->toMap() : null;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
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
                $model->processorUserIds = $map['ProcessorUserIds'];
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
