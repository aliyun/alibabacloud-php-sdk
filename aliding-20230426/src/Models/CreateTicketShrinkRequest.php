<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateTicketShrinkRequest extends Model
{
    /**
     * @example []
     *
     * @var string
     */
    public $customFields;

    /**
     * @var string
     */
    public $notifyShrink;

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
     * @var string
     */
    public $processorUserIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example SG
     *
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sceneContextShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;

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
        'notifyShrink' => 'Notify',
        'openTeamId' => 'OpenTeamId',
        'openTemplateBizId' => 'OpenTemplateBizId',
        'processorUserIdsShrink' => 'ProcessorUserIds',
        'scene' => 'Scene',
        'sceneContextShrink' => 'SceneContext',
        'tenantContextShrink' => 'TenantContext',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customFields) {
            $res['CustomFields'] = $this->customFields;
        }
        if (null !== $this->notifyShrink) {
            $res['Notify'] = $this->notifyShrink;
        }
        if (null !== $this->openTeamId) {
            $res['OpenTeamId'] = $this->openTeamId;
        }
        if (null !== $this->openTemplateBizId) {
            $res['OpenTemplateBizId'] = $this->openTemplateBizId;
        }
        if (null !== $this->processorUserIdsShrink) {
            $res['ProcessorUserIds'] = $this->processorUserIdsShrink;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sceneContextShrink) {
            $res['SceneContext'] = $this->sceneContextShrink;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomFields'])) {
            $model->customFields = $map['CustomFields'];
        }
        if (isset($map['Notify'])) {
            $model->notifyShrink = $map['Notify'];
        }
        if (isset($map['OpenTeamId'])) {
            $model->openTeamId = $map['OpenTeamId'];
        }
        if (isset($map['OpenTemplateBizId'])) {
            $model->openTemplateBizId = $map['OpenTemplateBizId'];
        }
        if (isset($map['ProcessorUserIds'])) {
            $model->processorUserIdsShrink = $map['ProcessorUserIds'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SceneContext'])) {
            $model->sceneContextShrink = $map['SceneContext'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
