<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkflowTemplateRequest extends Model
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
     * @var mixed[]
     */
    public $definition;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'action' => 'action',
        'collaborationGroupId' => 'collaborationGroupId',
        'definition' => 'definition',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->definition)) {
            Model::validateArray($this->definition);
        }
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

        if (null !== $this->definition) {
            if (\is_array($this->definition)) {
                $res['definition'] = [];
                foreach ($this->definition as $key1 => $value1) {
                    $res['definition'][$key1] = $value1;
                }
            }
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
            if (!empty($map['definition'])) {
                $model->definition = [];
                foreach ($map['definition'] as $key1 => $value1) {
                    $model->definition[$key1] = $value1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
