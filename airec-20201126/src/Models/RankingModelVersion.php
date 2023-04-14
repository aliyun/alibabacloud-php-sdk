<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\RankingModelVersion\runResult;
use AlibabaCloud\Tea\Model;

class RankingModelVersion extends Model
{
    /**
     * @example 模型A_t1638964800000
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runLog;

    /**
     * @var runResult
     */
    public $runResult;

    /**
     * @example 2021-12-08T20:00:00.0Z
     *
     * @var string
     */
    public $runTime;

    /**
     * @example TRAINING
     *
     * @var string
     */
    public $status;

    /**
     * @example a-a-a
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 模型A
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'name'         => 'Name',
        'runLog'       => 'RunLog',
        'runResult'    => 'RunResult',
        'runTime'      => 'RunTime',
        'status'       => 'Status',
        'templateId'   => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runLog) {
            $res['RunLog'] = $this->runLog;
        }
        if (null !== $this->runResult) {
            $res['RunResult'] = null !== $this->runResult ? $this->runResult->toMap() : null;
        }
        if (null !== $this->runTime) {
            $res['RunTime'] = $this->runTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RankingModelVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RunLog'])) {
            $model->runLog = $map['RunLog'];
        }
        if (isset($map['RunResult'])) {
            $model->runResult = runResult::fromMap($map['RunResult']);
        }
        if (isset($map['RunTime'])) {
            $model->runTime = $map['RunTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
