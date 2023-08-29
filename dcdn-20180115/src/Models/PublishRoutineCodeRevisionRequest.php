<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PublishRoutineCodeRevisionRequest extends Model
{
    /**
     * @description The environment to which you want to publish the code.
     *
     * >
     *
     *   production: the name of the environment, including the environment name (SpecName) and the domain name whitelist (AllowedHosts).
     *
     *   presetCanary: You can add canary release environments based on your business requirements. This parameter is optional.
     *
     * @example ["production","presetCanaryZhejiang"]
     *
     * @var mixed[]
     */
    public $envs;

    /**
     * @description The name of the routine. The name must be unique among the routines that belong to the same Alibaba Cloud account.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the routine code that you want to publish.
     *
     * @example 1620876959997924701
     *
     * @var string
     */
    public $selectCodeRevision;
    protected $_name = [
        'envs'               => 'Envs',
        'name'               => 'Name',
        'selectCodeRevision' => 'SelectCodeRevision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->selectCodeRevision) {
            $res['SelectCodeRevision'] = $this->selectCodeRevision;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishRoutineCodeRevisionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SelectCodeRevision'])) {
            $model->selectCodeRevision = $map['SelectCodeRevision'];
        }

        return $model;
    }
}
