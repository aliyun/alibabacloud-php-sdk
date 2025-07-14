<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListOrganizationRolesResponseBody\result;

use AlibabaCloud\Tea\Model;

class authConfigList extends Model
{
    /**
     * @description Permission type:
     * - quick_monitor: Metric monitoring
     * - subscription: Subscription management
     * - offline_download: Self-service data retrieval
     * - resource_package: Resource package management
     * - organization_ask: Organization identification code (AK/SK)
     * - developer_openapi: OpenAPI
     * - data_service: Data service
     * - admin_authorize3rd: Embedded analysis
     * - component_manage: Custom component
     * - template_open: Custom template
     * - custom_driver: Custom driver (supported only in standalone deployment)
     * - open_platform_custom_plugin: Custom plugin (supported only in standalone deployment)
     * - enterprise_safety: Enterprise security
     *
     * @example enterprise_safety
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
