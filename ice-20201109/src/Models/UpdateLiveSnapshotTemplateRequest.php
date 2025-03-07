<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveSnapshotTemplateRequest extends Model
{
    /**
     * @description The naming format of the snapshot captured in overwrite mode.
     *
     *   The value cannot start with a forward slash (/). Only the suffix .jpg is supported.
     *   The value cannot exceed 255 characters in length.
     *   The {JobId} placeholder is supported. It specifies the ID of the snapshot job.
     *   Placeholders such as {UnixTimestamp}, {Sequence}, and {Date} are not allowed.
     *   You must specify at least one of the OverwriteFormat and SequenceFormat parameters.
     *
     * @example snapshot/{JobId}.jpg
     *
     * @var string
     */
    public $overwriteFormat;

    /**
     * @description The naming format of the snapshot captured in time series mode.
     *
     *   The value cannot start with a forward slash (/). Only the suffix .jpg is supported.
     *   The value cannot exceed 255 characters in length.
     *   The {JobId}, {Date}, {UnixTimestamp}, and {Sequence} placeholders are supported. {JobId} specifies the ID of the snapshot job. {Date} specifies the date on which the snapshot is captured. {UnixTimestamp} specifies the timestamp of the snapshot. {Sequence} specifies the sequence number of the snapshot. You must specify at least one of the {UnixTimestamp} and {Sequence} placeholders.
     *   You must specify at least one of the OverwriteFormat and SequenceFormat parameters.
     *
     * @example snapshot/{JobId}/{UnixTimestamp}.jpg
     *
     * @var string
     */
    public $sequenceFormat;

    /**
     * @description The template ID.
     *
     * This parameter is required.
     * @example ****a046-263c-3560-978a-fb287782****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the template.
     *
     *   It cannot exceed 128 characters in length.
     *
     * This parameter is required.
     * @var string
     */
    public $templateName;

    /**
     * @description The interval between two adjacent snapshots. Unit: seconds.
     *
     *   Valid values: [5,3600].
     *
     * This parameter is required.
     * @example 5
     *
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
