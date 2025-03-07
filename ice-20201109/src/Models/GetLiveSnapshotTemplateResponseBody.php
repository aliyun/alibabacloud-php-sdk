<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetLiveSnapshotTemplateResponseBody extends Model
{
    /**
     * @description The time when the configuration was modified.
     *
     * @example 2022-02-02T22:22:22Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the template was created.
     *
     * @example 2022-02-02T22:22:22Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The naming format of the snapshot captured in overwrite mode.
     *
     * @example snapshot/{JobId}.jpg
     *
     * @var string
     */
    public $overwriteFormat;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The naming format of the snapshot captured in time series mode.
     *
     * @example snapshot/{JobId}/{UnixTimestamp}.jpg
     *
     * @var string
     */
    public $sequenceFormat;

    /**
     * @description The template ID.
     *
     * @example ****a046-263c-3560-978a-fb287782****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template name.
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The interval between two adjacent snapshots.
     *
     * @example 5
     *
     * @var int
     */
    public $timeInterval;

    /**
     * @description The type of the template.
     *
     * Valid values:
     *
     *   system
     *   custom
     *
     * @example custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'lastModified'    => 'LastModified',
        'overwriteFormat' => 'OverwriteFormat',
        'requestId'       => 'RequestId',
        'sequenceFormat'  => 'SequenceFormat',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'timeInterval'    => 'TimeInterval',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->overwriteFormat) {
            $res['OverwriteFormat'] = $this->overwriteFormat;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveSnapshotTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['OverwriteFormat'])) {
            $model->overwriteFormat = $map['OverwriteFormat'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
