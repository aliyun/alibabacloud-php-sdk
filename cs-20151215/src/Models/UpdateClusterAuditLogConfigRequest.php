<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterAuditLogConfigRequest extends Model
{
    /**
     * @description Enable or disable the audit log feature.
     *
     *   false: enables the audit log feature or updates the audit log configuration.
     *   true: disables the audit log feature.
     *
     * @example false
     *
     * @var bool
     */
    public $disable;

    /**
     * @description The [SLS project](https://help.aliyun.com/zh/sls/product-overview/project?spm=a2c4g.11186623.0.i3) to which the [Logstore](https://help.aliyun.com/zh/sls/product-overview/logstore?spm=a2c4g.11186623.0.0.48287ce0jAUWWM) belongs.
     *
     *   Default value: k8s-log-{clusterid}.
     *   After the cluster audit log feature is enabled, a Logstore is created in the specified SLS project to store the cluster audit logs.
     *   If you want to change the project after the cluster audit log feature is enabled, you can use this parameter to specify another SLS project. You can perform this operation only in ACK managed clusters.
     *
     * @example k8s-log-c82e6987e2961451182edacd74faf****
     *
     * @var string
     */
    public $slsProjectName;
    protected $_name = [
        'disable'        => 'disable',
        'slsProjectName' => 'sls_project_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }
        if (null !== $this->slsProjectName) {
            $res['sls_project_name'] = $this->slsProjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterAuditLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }
        if (isset($map['sls_project_name'])) {
            $model->slsProjectName = $map['sls_project_name'];
        }

        return $model;
    }
}
