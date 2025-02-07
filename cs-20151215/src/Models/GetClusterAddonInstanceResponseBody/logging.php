<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class logging extends Model
{
    /**
     * @var bool
     */
    public $capable;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $logProject;
    /**
     * @var string
     */
    public $logstore;
    protected $_name = [
        'capable'    => 'capable',
        'enabled'    => 'enabled',
        'logProject' => 'log_project',
        'logstore'   => 'logstore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capable) {
            $res['capable'] = $this->capable;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->logProject) {
            $res['log_project'] = $this->logProject;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
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
        if (isset($map['capable'])) {
            $model->capable = $map['capable'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['log_project'])) {
            $model->logProject = $map['log_project'];
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        return $model;
    }
}
