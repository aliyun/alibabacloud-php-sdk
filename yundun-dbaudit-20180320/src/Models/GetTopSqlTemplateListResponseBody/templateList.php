<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetTopSqlTemplateListResponseBody;

use AlibabaCloud\Tea\Model;

class templateList extends Model
{
    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $execCostUS;

    /**
     * @var string
     */
    public $affectRows;

    /**
     * @var string
     */
    public $execCostUSMean;

    /**
     * @var string
     */
    public $lastCaptureTime;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $captureCount;
    protected $_name = [
        'templateContent' => 'TemplateContent',
        'execCostUS'      => 'ExecCostUS',
        'affectRows'      => 'AffectRows',
        'execCostUSMean'  => 'ExecCostUSMean',
        'lastCaptureTime' => 'LastCaptureTime',
        'templateId'      => 'TemplateId',
        'captureCount'    => 'CaptureCount',
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
        if (null !== $this->execCostUS) {
            $res['ExecCostUS'] = $this->execCostUS;
        }
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }
        if (null !== $this->execCostUSMean) {
            $res['ExecCostUSMean'] = $this->execCostUSMean;
        }
        if (null !== $this->lastCaptureTime) {
            $res['LastCaptureTime'] = $this->lastCaptureTime;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->captureCount) {
            $res['CaptureCount'] = $this->captureCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['ExecCostUS'])) {
            $model->execCostUS = $map['ExecCostUS'];
        }
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }
        if (isset($map['ExecCostUSMean'])) {
            $model->execCostUSMean = $map['ExecCostUSMean'];
        }
        if (isset($map['LastCaptureTime'])) {
            $model->lastCaptureTime = $map['LastCaptureTime'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['CaptureCount'])) {
            $model->captureCount = $map['CaptureCount'];
        }

        return $model;
    }
}
