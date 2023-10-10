<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sServiceRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 5a166fbd-****-****-a286-781659d9f54c
     *
     * @var string
     */
    public $appId;

    /**
     * @description The policy used for external traffic management. Valid values:
     *
     *   Local: local mode
     *   Cluster: cluster mode
     *
     * Default value: Local.
     * @example Local
     *
     * @var string
     */
    public $externalTrafficPolicy;

    /**
     * @description The name of the service in a Kubernetes cluster.
     *
     *   The name can contain lowercase letters, digits, and hyphens (-).
     *   It must start with a letter and end with a letter or digit.
     *   The name can be 2 to 32 characters in length.
     *
     * @example service-http
     *
     * @var string
     */
    public $name;

    /**
     * @description The mappings between service ports. Set this parameter to a JSON array. The following parameters are included in the configurations:
     *
     *   **protocol**: the protocol used by the service. Valid values: TCP and UDP. This parameter is required.
     *   **port**: the frontend service port. Valid values: 1 to 65535. This parameter is required.
     *   **targetPort**: the backend container port. Valid values: 1 to 65535. This parameter is required.
     *
     * Example: `[{"protocol": "TCP", "port": 80, "targetPort": 8080},{"protocol": "TCP", "port": 81, "targetPort": 8081}]`
     * @example [{"protocol":"TCP","port":80,"targetPort":8080}]
     *
     * @var mixed[]
     */
    public $servicePorts;

    /**
     * @description The type of the service in a Kubernetes cluster. Set the value to ClusterIP.
     *
     * @example ClusterIP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'                 => 'AppId',
        'externalTrafficPolicy' => 'ExternalTrafficPolicy',
        'name'                  => 'Name',
        'servicePorts'          => 'ServicePorts',
        'type'                  => 'Type',
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
        if (null !== $this->externalTrafficPolicy) {
            $res['ExternalTrafficPolicy'] = $this->externalTrafficPolicy;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->servicePorts) {
            $res['ServicePorts'] = $this->servicePorts;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ExternalTrafficPolicy'])) {
            $model->externalTrafficPolicy = $map['ExternalTrafficPolicy'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServicePorts'])) {
            $model->servicePorts = $map['ServicePorts'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
