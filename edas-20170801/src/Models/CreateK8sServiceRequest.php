<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateK8sServiceRequest extends Model
{
    /**
     * @description The application ID.
     *
     * @example 5a166fbd-****-****-a286-781659d9f54c
     *
     * @var string
     */
    public $appId;

    /**
     * @description The policy used for external traffic management. Valid values:
     *
     *   Local: The network traffic can be routed to pods on the node where the Service is deployed.
     *   Cluster: The network traffic can be routed to pods on other nodes in the cluster.
     *
     * Default value: Local.
     * @example Local
     *
     * @var string
     */
    public $externalTrafficPolicy;

    /**
     * @description The name of the Kubernetes Service.
     *
     * @example service-http
     *
     * @var string
     */
    public $name;

    /**
     * @description The port mapping of the Kubernetes Service. Set this parameter to a JSON array. The following parameters are included in the configurations:
     *
     *   **protocol**: the protocol used by the Service. Valid values: TCP and UDP. This parameter is mandatory.
     *   **port**: the frontend service port. Valid values: 1 to 65535. This parameter is mandatory.
     *   **targetPort**: the backend container port. Valid values: 1 to 65535. This parameter is mandatory.
     *
     * Example: `[{"protocol": "TCP", "port": 80, "targetPort": 8080},{"protocol": "TCP", "port": 81, "targetPort": 8081}]`
     * @example [{"protocol":"TCP","port":80,"targetPort":8080}]
     *
     * @var mixed[]
     */
    public $servicePorts;

    /**
     * @description The type of the Kubernetes Service. Set the value to ClusterIP.
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
     * @return CreateK8sServiceRequest
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
