<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveRecordTemplateShrinkRequest extends Model
{
    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example test template
     *
     * @var string
     */
    public $name;

    /**
     * @description 录制格式
     *
     * @var string
     */
    public $recordFormatShrink;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 69e1f9fe-1e97-11ed-ba64-0c42a1b73d66
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'               => 'Name',
        'recordFormatShrink' => 'RecordFormat',
        'templateId'         => 'TemplateId',
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
        if (null !== $this->recordFormatShrink) {
            $res['RecordFormat'] = $this->recordFormatShrink;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveRecordTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecordFormat'])) {
            $model->recordFormatShrink = $map['RecordFormat'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
