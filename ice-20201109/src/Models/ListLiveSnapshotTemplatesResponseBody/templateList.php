<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templateList extends Model
{
    /**
     * @description The time when the job was created.
     *
     * @example 2022-07-20T02:48:58Z
     *
     * @var string
     */
    public $createTime;

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
     * @description The interval between two adjacent snapshots. Unit: seconds.
     *
     * @example 10
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
        'createTime'   => 'CreateTime',
        'templateId'   => 'TemplateId',
        'templateName' => 'TemplateName',
        'timeInterval' => 'TimeInterval',
        'type'         => 'Type',
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
     * @return templateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
