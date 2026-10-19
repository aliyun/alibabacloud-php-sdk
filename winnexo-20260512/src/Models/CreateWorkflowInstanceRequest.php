<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkflowInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $acceptanceCriteria;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $initiator;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var mixed[]
     */
    public $variables;
    protected $_name = [
        'acceptanceCriteria' => 'acceptanceCriteria',
        'businessId' => 'businessId',
        'collaborationGroupId' => 'collaborationGroupId',
        'initiator' => 'initiator',
        'priority' => 'priority',
        'templateId' => 'templateId',
        'tenantId' => 'tenantId',
        'title' => 'title',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptanceCriteria) {
            $res['acceptanceCriteria'] = $this->acceptanceCriteria;
        }

        if (null !== $this->businessId) {
            $res['businessId'] = $this->businessId;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->initiator) {
            $res['initiator'] = $this->initiator;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['variables'][$key1] = $value1;
                }
            }
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
        if (isset($map['acceptanceCriteria'])) {
            $model->acceptanceCriteria = $map['acceptanceCriteria'];
        }

        if (isset($map['businessId'])) {
            $model->businessId = $map['businessId'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['initiator'])) {
            $model->initiator = $map['initiator'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
