<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class SinkEventStoreConfiguration extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $eventStore;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'enabled' => 'enabled',
        'endpoint' => 'endpoint',
        'eventStore' => 'eventStore',
        'project' => 'project',
        'roleArn' => 'roleArn',
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

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->eventStore) {
            $res['eventStore'] = $this->eventStore;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
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

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['eventStore'])) {
            $model->eventStore = $map['eventStore'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        return $model;
    }
}
