<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QueryRecognizeRuleDetailRequest extends Model
{
    /**
     * @description The name of the sensitive field. To obtain the name of the sensitive field, call the [QuerySensNodeInfo](https://help.aliyun.com/document_detail/2747189.html) operation or log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Data Category and Sensitivity Level page.
     *
     * This parameter is required.
     * @var string
     */
    public $sensitiveName;

    /**
     * @description The tenant ID. To obtain the tenant ID, perform the following steps: Log on to the [DataWorks console](https://workbench.data.aliyun.com/console). Find your workspace and go to the DataStudio page. On the DataStudio page, click the logon username in the upper-right corner and click User Info in the Menu section.
     *
     * This parameter is required.
     * @example 10241024
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'sensitiveName' => 'SensitiveName',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitiveName) {
            $res['SensitiveName'] = $this->sensitiveName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRecognizeRuleDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SensitiveName'])) {
            $model->sensitiveName = $map['SensitiveName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
