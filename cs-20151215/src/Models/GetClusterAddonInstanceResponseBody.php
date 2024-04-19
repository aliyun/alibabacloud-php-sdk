<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterAddonInstanceResponseBody\logging;
use AlibabaCloud\Tea\Model;

class GetClusterAddonInstanceResponseBody extends Model
{
    /**
     * @description The custom configurations of the component.
     *
     * @example {"sls_project_name":""}
     *
     * @var string
     */
    public $config;

    /**
     * @description The status of Simple Log Service.
     *
     * @var logging
     */
    public $logging;

    /**
     * @description The name of the component instance.
     *
     * @example ack-node-problem-detector
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the component. Valid values:
     *
     *   active: The component is installed.
     *   updating: The component is being modified.
     *   upgrading: The component is being updated.
     *   deleting: The component is being uninstalled.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The version of the component instance.
     *
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
