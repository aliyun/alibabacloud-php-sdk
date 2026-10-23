<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkflowTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $definitionShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'action' => 'action',
        'collaborationGroupId' => 'collaborationGroupId',
        'definitionShrink' => 'definition',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->definitionShrink) {
            $res['definition'] = $this->definitionShrink;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['definition'])) {
            $model->definitionShrink = $map['definition'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
