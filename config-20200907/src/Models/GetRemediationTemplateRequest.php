<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetRemediationTemplateRequest extends Model
{
    /**
     * @description The ID of the automatic remediation template.
     *
     * For more information about how to obtain the ID of a remediation template, see [Compliance library](https://help.aliyun.com/document_detail/2337741.html).
     * @example ACS-ALB-BulkyEnableDeletionProtection
     *
     * @var string
     */
    public $templateIdentifier;
    protected $_name = [
        'templateIdentifier' => 'TemplateIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateIdentifier) {
            $res['TemplateIdentifier'] = $this->templateIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRemediationTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateIdentifier'])) {
            $model->templateIdentifier = $map['TemplateIdentifier'];
        }

        return $model;
    }
}
