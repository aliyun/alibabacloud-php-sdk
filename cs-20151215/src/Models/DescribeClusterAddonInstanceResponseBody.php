<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAddonInstanceResponseBody extends Model
{
    /**
     * @description The configuration of the component.
     *
     * @example {"NetworkPolicy":"true"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The name of the component.
     *
     * @example terway-eniip
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the component. Valid values:
     *
     *   initial: The component is being installed.
     *   active: The component is installed.
     *   unhealthy: The component is in an abnormal state.
     *   upgrading: The component is being updated.
     *   updating: The component is being modified.
     *   deleting: The component is being uninstalled.
     *   deleted: The component is deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The version of the component.
     *
     * @example v1.4.3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'  => 'config',
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
     * @return DescribeClusterAddonInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
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
