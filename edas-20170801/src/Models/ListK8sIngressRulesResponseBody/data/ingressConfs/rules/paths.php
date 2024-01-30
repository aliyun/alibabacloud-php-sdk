<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules\paths\backend;
use AlibabaCloud\Tea\Model;

class paths extends Model
{
    /**
     * @description The ID of the EDAS application.
     *
     * @example 43d30ba5-c568-460c-8080-d447ed1a****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the EDAS application.
     *
     * @example my-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The configurations of the backend Service.
     *
     * @var backend
     */
    public $backend;

    /**
     * @description The collection rate that is set based on the trace query feature. You can add a trace ID to a gateway to use the trace query feature of EDAS.
     *
     * @example 100
     *
     * @var int
     */
    public $collectRate;

    /**
     * @description The path to be accessed.
     *
     * @example /foo/bar
     *
     * @var string
     */
    public $path;

    /**
     * @description The path type that determines how a path is matched.
     *
     *   ImplementationSpecific (default)
     *   Exact
     *   Prefix
     *
     * @example ImplementationSpecific
     *
     * @var string
     */
    public $pathType;

    /**
     * @description The state of the Ingress. Valid values:
     *
     *   **Normal**: The Ingress works as expected.
     *   **ServiceNotFound**: The backend Service does not exist.
     *   **InvalidServicePort**: The Service port is invalid.
     *   **NotManagedService**: The Service is not managed by EDAS.
     *   **Unknown**: An unknown error occurred.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appId'       => 'AppId',
        'appName'     => 'AppName',
        'backend'     => 'Backend',
        'collectRate' => 'CollectRate',
        'path'        => 'Path',
        'pathType'    => 'PathType',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->backend) {
            $res['Backend'] = null !== $this->backend ? $this->backend->toMap() : null;
        }
        if (null !== $this->collectRate) {
            $res['CollectRate'] = $this->collectRate;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Backend'])) {
            $model->backend = backend::fromMap($map['Backend']);
        }
        if (isset($map['CollectRate'])) {
            $model->collectRate = $map['CollectRate'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
