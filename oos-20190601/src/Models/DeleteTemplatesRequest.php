<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateNames;

    /**
     * @var bool
     */
    public $autoDeleteExecutions;
    protected $_name = [
        'regionId'             => 'RegionId',
        'templateNames'        => 'TemplateNames',
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
        if (null !== $this->templateNames) {
            $res['TemplateNames'] = $this->templateNames;
        }
        if (null !== $this->autoDeleteExecutions) {
            $res['AutoDeleteExecutions'] = $this->autoDeleteExecutions;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateNames'])) {
            $model->templateNames = $map['TemplateNames'];
        }
        if (isset($map['AutoDeleteExecutions'])) {
            $model->autoDeleteExecutions = $map['AutoDeleteExecutions'];
        }

        return $model;
    }
}
