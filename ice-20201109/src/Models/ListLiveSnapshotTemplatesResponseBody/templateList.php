<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class templateList extends Model
{
    /**
     * @var string
     */
    public $createTime;
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
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
