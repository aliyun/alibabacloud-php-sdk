<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeploySGLangModelInput;

use AlibabaCloud\Dara\Model;

class logConfig extends Model
{
    /**
     * @var bool
     */
    public $enableInstanceMetrics;

    /**
     * @var bool
     */
    public $enableRequestMetrics;

    /**
     * @var string
     */
    public $logBeginRule;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'enableInstanceMetrics' => 'enableInstanceMetrics',
        'enableRequestMetrics' => 'enableRequestMetrics',
        'logBeginRule' => 'logBeginRule',
        'logstore' => 'logstore',
        'project' => 'project',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableInstanceMetrics) {
            $res['enableInstanceMetrics'] = $this->enableInstanceMetrics;
        }

        if (null !== $this->enableRequestMetrics) {
            $res['enableRequestMetrics'] = $this->enableRequestMetrics;
        }

        if (null !== $this->logBeginRule) {
            $res['logBeginRule'] = $this->logBeginRule;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
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
        if (isset($map['enableInstanceMetrics'])) {
            $model->enableInstanceMetrics = $map['enableInstanceMetrics'];
        }

        if (isset($map['enableRequestMetrics'])) {
            $model->enableRequestMetrics = $map['enableRequestMetrics'];
        }

        if (isset($map['logBeginRule'])) {
            $model->logBeginRule = $map['logBeginRule'];
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
