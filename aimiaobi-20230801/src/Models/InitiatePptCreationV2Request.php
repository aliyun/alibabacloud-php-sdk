<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class InitiatePptCreationV2Request extends Model
{
    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var bool
     */
    public $isMobile;

    /**
     * @var string
     */
    public $outline;

    /**
     * @var int
     */
    public $pptTemplateId;

    /**
     * @var int
     */
    public $pptTemplateType;

    /**
     * @var int
     */
    public $processType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'externalUserId' => 'ExternalUserId',
        'isMobile' => 'IsMobile',
        'outline' => 'Outline',
        'pptTemplateId' => 'PptTemplateId',
        'pptTemplateType' => 'PptTemplateType',
        'processType' => 'ProcessType',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
        }

        if (null !== $this->isMobile) {
            $res['IsMobile'] = $this->isMobile;
        }

        if (null !== $this->outline) {
            $res['Outline'] = $this->outline;
        }

        if (null !== $this->pptTemplateId) {
            $res['PptTemplateId'] = $this->pptTemplateId;
        }

        if (null !== $this->pptTemplateType) {
            $res['PptTemplateType'] = $this->pptTemplateType;
        }

        if (null !== $this->processType) {
            $res['ProcessType'] = $this->processType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }

        if (isset($map['IsMobile'])) {
            $model->isMobile = $map['IsMobile'];
        }

        if (isset($map['Outline'])) {
            $model->outline = $map['Outline'];
        }

        if (isset($map['PptTemplateId'])) {
            $model->pptTemplateId = $map['PptTemplateId'];
        }

        if (isset($map['PptTemplateType'])) {
            $model->pptTemplateType = $map['PptTemplateType'];
        }

        if (isset($map['ProcessType'])) {
            $model->processType = $map['ProcessType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
