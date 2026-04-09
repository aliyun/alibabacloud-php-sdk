<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class SLSLogDestination extends Model
{
    /**
     * @var string
     */
    public $logStore;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'logStore' => 'logStore',
        'project' => 'project',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStore) {
            $res['logStore'] = $this->logStore;
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
        if (isset($map['logStore'])) {
            $model->logStore = $map['logStore'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
