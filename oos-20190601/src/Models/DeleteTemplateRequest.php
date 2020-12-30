<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var bool
     */
    public $autoDeleteExecutions;
    protected $_name = [
        'regionId'             => 'RegionId',
        'templateName'         => 'TemplateName',
        'autoDeleteExecutions' => 'AutoDeleteExecutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->autoDeleteExecutions) {
            $res['AutoDeleteExecutions'] = $this->autoDeleteExecutions;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['AutoDeleteExecutions'])) {
            $model->autoDeleteExecutions = $map['AutoDeleteExecutions'];
        }

        return $model;
    }
}
