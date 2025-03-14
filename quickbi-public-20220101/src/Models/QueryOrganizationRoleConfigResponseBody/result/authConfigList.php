<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationRoleConfigResponseBody\result;

use AlibabaCloud\Tea\Model;

class authConfigList extends Model
{
    /**
     * @description Permission type:
     * - quick_monitor: Metric Monitoring
     * - subscription: Subscription Management
     * - offline_download: Self-service Data Retrieval
     * - resource_package: Resource Package Management
     * - organization_ask: Organization Access Key/Secret (AK/SK)
     * - developer_openapi: Open API
     * - data_service: Data Service
     * - admin_authorize3rd: Embedded Analysis
     * - component_manage: Custom Component
     * - template_open: Custom Template
     * - custom_driver: Custom Driver (supported only in standalone deployment)
     * - open_platform_custom_plugin: Custom Plugin (supported only in standalone deployment)
     * - enterprise_safety: Enterprise Security
     *
     * @example quick_monitor
     *
     * @var string
     */
    public $authKey;
    protected $_name = [
        'authKey' => 'AuthKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        return $model;
    }
}
