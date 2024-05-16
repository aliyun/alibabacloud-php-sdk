<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QuerySensLevelRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example e1970541-6cf5-4d23-b101-d5b66f6e10af
     *
     * @var string
     */
    public $templateId;

    /**
     * @description This parameter is required.
     *
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'templateId' => 'TemplateId',
        'tenantId'   => 'tenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySensLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
