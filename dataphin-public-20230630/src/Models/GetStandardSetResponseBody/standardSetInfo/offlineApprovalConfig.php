<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardSetResponseBody\standardSetInfo;

use AlibabaCloud\Dara\Model;

class offlineApprovalConfig extends Model
{
    /**
     * @var string
     */
    public $approvalType;

    /**
     * @var bool
     */
    public $enableApproval;

    /**
     * @var bool
     */
    public $isSubmitInBatch;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'approvalType' => 'ApprovalType',
        'enableApproval' => 'EnableApproval',
        'isSubmitInBatch' => 'IsSubmitInBatch',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->enableApproval) {
            $res['EnableApproval'] = $this->enableApproval;
        }

        if (null !== $this->isSubmitInBatch) {
            $res['IsSubmitInBatch'] = $this->isSubmitInBatch;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }

        if (isset($map['EnableApproval'])) {
            $model->enableApproval = $map['EnableApproval'];
        }

        if (isset($map['IsSubmitInBatch'])) {
            $model->isSubmitInBatch = $map['IsSubmitInBatch'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
