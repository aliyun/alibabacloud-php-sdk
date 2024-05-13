<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListSensitivityLevelRequest extends Model
{
    /**
     * @description The ID of the classification template. You can call the [ListClassificationTemplates](https://help.aliyun.com/document_detail/460613.html) operation to query the ID of the classification template.
     *
     * @example 15**
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The type of the classification template. You can call the [ListClassificationTemplates](https://help.aliyun.com/document_detail/460613.html) operation to query the type of the classification template.
     *
     * Valid values:
     *
     *   USER_DEFINE: a custom template.
     *   INNER: a built-in template.
     *
     * @example INNER
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html) in the topic "Manage DMS tenants."
     * @example 20***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'templateId'   => 'TemplateId',
        'templateType' => 'TemplateType',
        'tid'          => 'Tid',
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSensitivityLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
