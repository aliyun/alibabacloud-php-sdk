<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;

use AlibabaCloud\Tea\Model;

class systemEventsLogging extends Model
{
    /**
     * @description Specifies whether to enable system event storage.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the LogProject that stores system events.
     *
     * @example k8s-log-cb95aa626a47740afbf6aa099b65****
     *
     * @var string
     */
    public $loggingProject;
    protected $_name = [
        'enabled'        => 'enabled',
        'loggingProject' => 'logging_project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->loggingProject) {
            $res['logging_project'] = $this->loggingProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemEventsLogging
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['logging_project'])) {
            $model->loggingProject = $map['logging_project'];
        }

        return $model;
    }
}
