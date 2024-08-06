<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetClusterAuditProjectResponseBody extends Model
{
    /**
     * @var bool
     */
    public $auditEnabled;

    /**
     * @example k8s-log-cad1230511cbb4db4a488e58518******
     *
     * @var string
     */
    public $slsProjectName;
    protected $_name = [
        'auditEnabled'   => 'audit_enabled',
        'slsProjectName' => 'sls_project_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditEnabled) {
            $res['audit_enabled'] = $this->auditEnabled;
        }
        if (null !== $this->slsProjectName) {
            $res['sls_project_name'] = $this->slsProjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterAuditProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['audit_enabled'])) {
            $model->auditEnabled = $map['audit_enabled'];
        }
        if (isset($map['sls_project_name'])) {
            $model->slsProjectName = $map['sls_project_name'];
        }

        return $model;
    }
}
