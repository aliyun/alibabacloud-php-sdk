<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteTemplateRequest extends Model
{
    /**
     * @description You can call this operation to delete a template.
     *
     * @example false
     *
     * @var bool
     */
    public $autoDeleteExecutions;

    /**
     * @description Specifies whether to delete the related executions when a template is deleted.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'autoDeleteExecutions' => 'AutoDeleteExecutions',
        'regionId'             => 'RegionId',
        'templateName'         => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeleteExecutions) {
            $res['AutoDeleteExecutions'] = $this->autoDeleteExecutions;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoDeleteExecutions'])) {
            $model->autoDeleteExecutions = $map['AutoDeleteExecutions'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
