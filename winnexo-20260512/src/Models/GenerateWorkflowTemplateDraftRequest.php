<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GenerateWorkflowTemplateDraftRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var mixed[]
     */
    public $previousDraft;

    /**
     * @var string
     */
    public $requirement;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'previousDraft' => 'previousDraft',
        'requirement' => 'requirement',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->previousDraft)) {
            Model::validateArray($this->previousDraft);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->previousDraft) {
            if (\is_array($this->previousDraft)) {
                $res['previousDraft'] = [];
                foreach ($this->previousDraft as $key1 => $value1) {
                    $res['previousDraft'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requirement) {
            $res['requirement'] = $this->requirement;
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

        if (isset($map['previousDraft'])) {
            if (!empty($map['previousDraft'])) {
                $model->previousDraft = [];
                foreach ($map['previousDraft'] as $key1 => $value1) {
                    $model->previousDraft[$key1] = $value1;
                }
            }
        }

        if (isset($map['requirement'])) {
            $model->requirement = $map['requirement'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
