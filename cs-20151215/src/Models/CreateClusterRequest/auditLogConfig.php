<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;

class auditLogConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $slsProjectName;
    protected $_name = [
        'enabled' => 'enabled',
        'slsProjectName' => 'sls_project_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['sls_project_name'])) {
            $model->slsProjectName = $map['sls_project_name'];
        }

        return $model;
    }
}
