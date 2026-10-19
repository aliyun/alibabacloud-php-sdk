<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ImportWorkflowTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var mixed[]
     */
    public $template;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'template' => 'template',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->template)) {
            Model::validateArray($this->template);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->template) {
            if (\is_array($this->template)) {
                $res['template'] = [];
                foreach ($this->template as $key1 => $value1) {
                    $res['template'][$key1] = $value1;
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
        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['template'])) {
            if (!empty($map['template'])) {
                $model->template = [];
                foreach ($map['template'] as $key1 => $value1) {
                    $model->template[$key1] = $value1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
