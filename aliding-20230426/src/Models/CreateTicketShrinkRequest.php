<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateTicketShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customFields;
    /**
     * @var string
     */
    public $notifyShrink;
    /**
     * @var string
     */
    public $openTeamId;
    /**
     * @var string
     */
    public $openTemplateBizId;
    /**
     * @var string
     */
    public $processorUserIdsShrink;
    /**
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
     * @var string
     */
    public $title;
    protected $_name = [
        'customFields'           => 'CustomFields',
        'notifyShrink'           => 'Notify',
        'openTeamId'             => 'OpenTeamId',
        'openTemplateBizId'      => 'OpenTemplateBizId',
        'processorUserIdsShrink' => 'ProcessorUserIds',
        'scene'                  => 'Scene',
        'sceneContextShrink'     => 'SceneContext',
        'tenantContextShrink'    => 'TenantContext',
        'title'                  => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
