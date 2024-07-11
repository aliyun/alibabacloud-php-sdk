<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterAuditLogConfigRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $disable;

    /**
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
