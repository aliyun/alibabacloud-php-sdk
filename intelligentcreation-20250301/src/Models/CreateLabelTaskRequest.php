<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20250301\Models;

use AlibabaCloud\Dara\Model;

class CreateLabelTaskRequest extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $labelTemplateId;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'fileUrl' => 'FileUrl',
        'idempotentId' => 'IdempotentId',
        'labelTemplateId' => 'LabelTemplateId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }

        if (null !== $this->labelTemplateId) {
            $res['LabelTemplateId'] = $this->labelTemplateId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }

        if (isset($map['LabelTemplateId'])) {
            $model->labelTemplateId = $map['LabelTemplateId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
