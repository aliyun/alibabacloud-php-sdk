<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class SinkEventStoreConfiguration extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example cn-shanghai-intranet.log.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example exampleStore
     *
     * @var string
     */
    public $eventStore;

    /**
     * @example exampleProject
     *
     * @var string
     */
    public $project;

    /**
     * @example acs:ram::123456789:role/aliyunlogetlrole
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'enabled'    => 'enabled',
        'endpoint'   => 'endpoint',
        'eventStore' => 'eventStore',
        'project'    => 'project',
        'roleArn'    => 'roleArn',
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

    /**
     * @param array $map
     *
     * @return SinkEventStoreConfiguration
     */
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
