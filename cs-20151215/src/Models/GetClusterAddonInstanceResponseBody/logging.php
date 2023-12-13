<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class logging extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $capable;

    /**
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example my-log-project
     *
     * @var string
     */
    public $logProject;

    /**
     * @example my-logstore
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return logging
     */
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
