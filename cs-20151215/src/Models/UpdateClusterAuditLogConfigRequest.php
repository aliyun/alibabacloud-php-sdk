<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterAuditLogConfigRequest extends Model
{
    /**
     * @description Enable or disable audit logging.
     *
     *   false: enables audit logging or updates the audit logging configurations.
     *   true: disables audit logging.
     *
     * @example false
     *
     * @var bool
     */
    public $disable;

    /**
     * @description The [Simple Log Service project](https://help.aliyun.com/document_detail/48873.html) to which the [Logstore](https://help.aliyun.com/document_detail/48873.html) storing the cluster audit logs belongs.
     *
     *   Default value: k8s-log-{clusterid}.
     *   After the cluster audit log feature is enabled, a Logstore is created in the specified Simple Log Service project to store cluster audit logs.
     *   If you want to change the project after audit logging is enabled for the cluster, you can use this parameter to specify another project. You can perform this operation only in ACK managed clusters.
     *
     * @example k8s-log-c82e6987e2961451182edacd74faf****
     *
     * @var string
     */
    public $slsProjectName;
    protected $_name = [
        'disable' => 'disable',
        'slsProjectName' => 'sls_project_name',
    ];

    public function validate() {}

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
