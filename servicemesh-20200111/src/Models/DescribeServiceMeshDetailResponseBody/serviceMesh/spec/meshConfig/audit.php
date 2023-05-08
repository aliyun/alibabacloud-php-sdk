<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class audit extends Model
{
    /**
     * @description Indicates whether an audit project exists in the ASM instance. Valid values:
     *
     *   `audit_project_exist`: An audit project exists.
     *   `audit_project_not_exist`: No audit project exists.
     *
     * @example audit_project_not_exist
     *
     * @var string
     */
    public $auditProjectStatus;

    /**
     * @description Indicates whether mesh audit is enabled. Valid values:
     *
     *   `true`: Mesh audit is enabled.
     *   `false`: Mesh audit is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the Log Service project that is used for mesh audit.
     *
     * @example audit-project
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'auditProjectStatus' => 'AuditProjectStatus',
        'enabled'            => 'Enabled',
        'project'            => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditProjectStatus) {
            $res['AuditProjectStatus'] = $this->auditProjectStatus;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditProjectStatus'])) {
            $model->auditProjectStatus = $map['AuditProjectStatus'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
