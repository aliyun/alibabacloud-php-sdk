<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class GetClusterAuditProjectResponseBody extends Model
{
    /**
     * @var bool
     */
    public $auditEnabled;
    /**
     * @var string
     */
    public $slsProjectName;
    protected $_name = [
        'auditEnabled'   => 'audit_enabled',
        'slsProjectName' => 'sls_project_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
