<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class DeleteTemplateRequest extends Model
{
    /**
     * @var bool
     */
    public $autoDeleteExecutions;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'autoDeleteExecutions' => 'AutoDeleteExecutions',
        'regionId' => 'RegionId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
