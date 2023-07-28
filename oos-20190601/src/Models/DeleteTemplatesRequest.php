<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteTemplatesRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example false
     *
     * @var bool
     */
    public $autoDeleteExecutions;

    /**
     * @description The name list of templates to be deleted.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to delete the related executions when a template is deleted.
     *
     * @example ["t1","t2"]
     *
     * @var string
     */
    public $templateNames;
    protected $_name = [
        'autoDeleteExecutions' => 'AutoDeleteExecutions',
        'regionId'             => 'RegionId',
        'templateNames'        => 'TemplateNames',
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
        if (null !== $this->templateNames) {
            $res['TemplateNames'] = $this->templateNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTemplatesRequest
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
        if (isset($map['TemplateNames'])) {
            $model->templateNames = $map['TemplateNames'];
        }

        return $model;
    }
}
