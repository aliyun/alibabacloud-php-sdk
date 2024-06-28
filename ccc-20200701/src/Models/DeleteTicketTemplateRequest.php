<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DeleteTicketTemplateRequest extends Model
{
    /**
     * @example ef1e71e9-ae9d-487c-96ad-9181d85cf802
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example **43c2671b-8939-4223-***-6bd187905cc8_1717664210492
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTicketTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
