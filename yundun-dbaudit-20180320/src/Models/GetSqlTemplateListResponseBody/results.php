<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSqlTemplateListResponseBody;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSqlTemplateListResponseBody\results\ruleList;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $lastCaptureTime;

    /**
     * @var int
     */
    public $captureCount;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $sqlType;

    /**
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'templateContent' => 'TemplateContent',
        'lastCaptureTime' => 'LastCaptureTime',
        'captureCount'    => 'CaptureCount',
        'templateId'      => 'TemplateId',
        'sqlType'         => 'SqlType',
        'ruleList'        => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->lastCaptureTime) {
            $res['LastCaptureTime'] = $this->lastCaptureTime;
        }
        if (null !== $this->captureCount) {
            $res['CaptureCount'] = $this->captureCount;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['LastCaptureTime'])) {
            $model->lastCaptureTime = $map['LastCaptureTime'];
        }
        if (isset($map['CaptureCount'])) {
            $model->captureCount = $map['CaptureCount'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
