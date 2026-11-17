<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeBaseBuildTaskRequest;

use AlibabaCloud\Dara\Model;

class trigger extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'cron' => 'Cron',
        'enabled' => 'Enabled',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
