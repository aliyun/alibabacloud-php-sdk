<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveSnapshotTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $overwriteFormat;

    /**
     * @var string
     */
    public $sequenceFormat;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $timeInterval;
    protected $_name = [
        'overwriteFormat' => 'OverwriteFormat',
        'sequenceFormat'  => 'SequenceFormat',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'timeInterval'    => 'TimeInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overwriteFormat) {
            $res['OverwriteFormat'] = $this->overwriteFormat;
        }
        if (null !== $this->sequenceFormat) {
            $res['SequenceFormat'] = $this->sequenceFormat;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveSnapshotTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverwriteFormat'])) {
            $model->overwriteFormat = $map['OverwriteFormat'];
        }
        if (isset($map['SequenceFormat'])) {
            $model->sequenceFormat = $map['SequenceFormat'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }

        return $model;
    }
}
