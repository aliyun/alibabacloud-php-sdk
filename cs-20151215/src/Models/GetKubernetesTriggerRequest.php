<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetKubernetesTriggerRequest extends Model
{
    /**
     * @description The application name.
     *
     * @example web-server
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace name.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The type of trigger. Valid values:
     *
     *   `deployment`: performs actions on Deployments.
     *   `application`: performs actions on applications that are deployed in Application Center.
     *
     * If you do not set this parameter, triggers are not filtered by type.
     * @example deployment
     *
     * @var string
     */
    public $type;

    /**
     * @description The action that the trigger performs. Set the value to redeploy.
     *
     * If you do not specify this parameter, triggers are not filtered by action.
     * @example redeploy
     *
     * @var string
     */
    public $action;
    protected $_name = [
        'name'      => 'Name',
        'namespace' => 'Namespace',
        'type'      => 'Type',
        'action'    => 'action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKubernetesTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        return $model;
    }
}
