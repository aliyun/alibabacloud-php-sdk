<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetSmsTemplateListResponseBody\data\list_\templateTag;

class list_ extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var templateTag[]
     */
    public $templateTag;

    /**
     * @var int
     */
    public $templateType;

    /**
     * @var string[]
     */
    public $usableStateList;

    /**
     * @var string
     */
    public $workOrderId;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'gmtCreate' => 'GmtCreate',
        'signName' => 'SignName',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'templateTag' => 'TemplateTag',
        'templateType' => 'TemplateType',
        'usableStateList' => 'UsableStateList',
        'workOrderId' => 'WorkOrderId',
    ];

    public function validate()
    {
        if (\is_array($this->templateTag)) {
            Model::validateArray($this->templateTag);
        }
        if (\is_array($this->usableStateList)) {
            Model::validateArray($this->usableStateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateTag) {
            if (\is_array($this->templateTag)) {
                $res['TemplateTag'] = [];
                $n1 = 0;
                foreach ($this->templateTag as $item1) {
                    $res['TemplateTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->usableStateList) {
            if (\is_array($this->usableStateList)) {
                $res['UsableStateList'] = [];
                $n1 = 0;
                foreach ($this->usableStateList as $item1) {
                    $res['UsableStateList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workOrderId) {
            $res['WorkOrderId'] = $this->workOrderId;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateTag'])) {
            if (!empty($map['TemplateTag'])) {
                $model->templateTag = [];
                $n1 = 0;
                foreach ($map['TemplateTag'] as $item1) {
                    $model->templateTag[$n1] = templateTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['UsableStateList'])) {
            if (!empty($map['UsableStateList'])) {
                $model->usableStateList = [];
                $n1 = 0;
                foreach ($map['UsableStateList'] as $item1) {
                    $model->usableStateList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkOrderId'])) {
            $model->workOrderId = $map['WorkOrderId'];
        }

        return $model;
    }
}
