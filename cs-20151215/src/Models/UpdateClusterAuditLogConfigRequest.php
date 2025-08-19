<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UpdateClusterAuditLogConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $disable;

    /**
     * @var string
     */
    public $slsProjectName;
    protected $_name = [
        'disable' => 'disable',
        'slsProjectName' => 'sls_project_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
