<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models;

use AlibabaCloud\Tea\Model;

class CreateLabelTaskRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $videoName;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $callbackUrl;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'videoName'     => 'VideoName',
        'videoUrl'      => 'VideoUrl',
        'templateId'    => 'TemplateId',
        'callbackUrl'   => 'CallbackUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLabelTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        return $model;
    }
}
