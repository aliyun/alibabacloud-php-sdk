<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaResponseBody\mediaInfoList\mediaDynamicInfo;

use AlibabaCloud\Dara\Model;

class mediaExtraInfo extends Model
{
    /**
     * @var string
     */
    public $aiAuditJobId;

    /**
     * @var string
     */
    public $aiAuditLabel;

    /**
     * @var string
     */
    public $aiAuditResult;

    /**
     * @var string
     */
    public $aiAuditStatus;

    /**
     * @var string
     */
    public $aiAuditTemplate;

    /**
     * @var string
     */
    public $manualAuditResult;

    /**
     * @var string
     */
    public $manualAuditStatus;
    protected $_name = [
        'aiAuditJobId' => 'AiAuditJobId',
        'aiAuditLabel' => 'AiAuditLabel',
        'aiAuditResult' => 'AiAuditResult',
        'aiAuditStatus' => 'AiAuditStatus',
        'aiAuditTemplate' => 'AiAuditTemplate',
        'manualAuditResult' => 'ManualAuditResult',
        'manualAuditStatus' => 'ManualAuditStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiAuditJobId) {
            $res['AiAuditJobId'] = $this->aiAuditJobId;
        }

        if (null !== $this->aiAuditLabel) {
            $res['AiAuditLabel'] = $this->aiAuditLabel;
        }

        if (null !== $this->aiAuditResult) {
            $res['AiAuditResult'] = $this->aiAuditResult;
        }

        if (null !== $this->aiAuditStatus) {
            $res['AiAuditStatus'] = $this->aiAuditStatus;
        }

        if (null !== $this->aiAuditTemplate) {
            $res['AiAuditTemplate'] = $this->aiAuditTemplate;
        }

        if (null !== $this->manualAuditResult) {
            $res['ManualAuditResult'] = $this->manualAuditResult;
        }

        if (null !== $this->manualAuditStatus) {
            $res['ManualAuditStatus'] = $this->manualAuditStatus;
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
        if (isset($map['AiAuditJobId'])) {
            $model->aiAuditJobId = $map['AiAuditJobId'];
        }

        if (isset($map['AiAuditLabel'])) {
            $model->aiAuditLabel = $map['AiAuditLabel'];
        }

        if (isset($map['AiAuditResult'])) {
            $model->aiAuditResult = $map['AiAuditResult'];
        }

        if (isset($map['AiAuditStatus'])) {
            $model->aiAuditStatus = $map['AiAuditStatus'];
        }

        if (isset($map['AiAuditTemplate'])) {
            $model->aiAuditTemplate = $map['AiAuditTemplate'];
        }

        if (isset($map['ManualAuditResult'])) {
            $model->manualAuditResult = $map['ManualAuditResult'];
        }

        if (isset($map['ManualAuditStatus'])) {
            $model->manualAuditStatus = $map['ManualAuditStatus'];
        }

        return $model;
    }
}
