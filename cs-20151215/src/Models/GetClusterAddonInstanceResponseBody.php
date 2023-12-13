<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponseBody\logging;
use AlibabaCloud\Tea\Model;

class GetClusterAddonInstanceResponseBody extends Model
{
    /**
     * @example {"sls_project_name":""}
     *
     * @var string
     */
    public $config;

    /**
     * @var logging
     */
    public $logging;

    /**
     * @example ack-node-problem-detector
     *
     * @var string
     */
    public $name;

    /**
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @example 1.2.16
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'  => 'config',
        'logging' => 'logging',
        'name'    => 'name',
        'state'   => 'state',
        'version' => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->logging) {
            $res['logging'] = null !== $this->logging ? $this->logging->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterAddonInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['logging'])) {
            $model->logging = logging::fromMap($map['logging']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
