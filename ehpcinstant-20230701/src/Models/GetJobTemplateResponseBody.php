<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobTemplateResponseBody\jobTemplateConfig;

class GetJobTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var jobTemplateConfig
     */
    public $jobTemplateConfig;

    /**
     * @var string
     */
    public $jobTemplateDescription;

    /**
     * @var string
     */
    public $jobTemplateId;

    /**
     * @var string
     */
    public $jobTemplateName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'jobTemplateConfig' => 'JobTemplateConfig',
        'jobTemplateDescription' => 'JobTemplateDescription',
        'jobTemplateId' => 'JobTemplateId',
        'jobTemplateName' => 'JobTemplateName',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->jobTemplateConfig) {
            $this->jobTemplateConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->jobTemplateConfig) {
            $res['JobTemplateConfig'] = null !== $this->jobTemplateConfig ? $this->jobTemplateConfig->toArray($noStream) : $this->jobTemplateConfig;
        }

        if (null !== $this->jobTemplateDescription) {
            $res['JobTemplateDescription'] = $this->jobTemplateDescription;
        }

        if (null !== $this->jobTemplateId) {
            $res['JobTemplateId'] = $this->jobTemplateId;
        }

        if (null !== $this->jobTemplateName) {
            $res['JobTemplateName'] = $this->jobTemplateName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['JobTemplateConfig'])) {
            $model->jobTemplateConfig = jobTemplateConfig::fromMap($map['JobTemplateConfig']);
        }

        if (isset($map['JobTemplateDescription'])) {
            $model->jobTemplateDescription = $map['JobTemplateDescription'];
        }

        if (isset($map['JobTemplateId'])) {
            $model->jobTemplateId = $map['JobTemplateId'];
        }

        if (isset($map['JobTemplateName'])) {
            $model->jobTemplateName = $map['JobTemplateName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
