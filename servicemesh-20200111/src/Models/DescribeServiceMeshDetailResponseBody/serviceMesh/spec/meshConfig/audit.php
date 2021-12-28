<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class audit extends Model
{
    /**
     * @var string
     */
    public $auditProjectStatus;

    /**
     * @var bool
     */
    public $enabled;

    /**
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
