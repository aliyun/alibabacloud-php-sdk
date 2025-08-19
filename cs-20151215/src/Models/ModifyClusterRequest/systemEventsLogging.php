<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;

use AlibabaCloud\Dara\Model;

class systemEventsLogging extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $loggingProject;
    protected $_name = [
        'enabled' => 'enabled',
        'loggingProject' => 'logging_project',
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

        if (null !== $this->loggingProject) {
            $res['logging_project'] = $this->loggingProject;
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

        if (isset($map['logging_project'])) {
            $model->loggingProject = $map['logging_project'];
        }

        return $model;
    }
}
