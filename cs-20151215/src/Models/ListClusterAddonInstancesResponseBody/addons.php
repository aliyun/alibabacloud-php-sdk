<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class addons extends Model
{
    /**
     * @description The component name.
     *
     * @example coredns
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
     * @description The version of the component.
     *
     * @example v1.9.3.10-7dfca203-aliyun
     *
     * @var string
     */
    public $version;
    protected $_name = [
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
     * @return addons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
