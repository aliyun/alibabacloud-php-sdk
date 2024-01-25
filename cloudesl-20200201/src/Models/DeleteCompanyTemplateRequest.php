<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DeleteCompanyTemplateRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 742842379343605760
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'extraParams' => 'ExtraParams',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCompanyTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
