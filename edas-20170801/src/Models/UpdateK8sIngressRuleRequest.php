<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sIngressRuleRequest extends Model
{
    /**
     * @description The annotations.
     *
     * @example {\"nginx.ingress.kubernetes.io/ssl-redirect\":\"true\",\"nginx.ingress.kubernetes.io/configuration-snippet\":\"set $test value\"}
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The ID of the Kubernetes cluster.
     *
     * @example 5b2b4ab4-efbc-4a81-9c45-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The routing rules of the Ingress. Set this parameter to a JSON string in the following format:
     *
     * Parameter description:
     *
     *   rules: the list of routing rules.
     *   host: the domain name to be accessed.
     *   secretName: the name of the Secret that stores the information about the Transport Layer Security (TLS) certificate. The certificate is required if you need to use the HTTPS protocol.
     *   paths: the list of paths to be accessed.
     *   path: the path to be accessed.
     *   backend: the configuration of the backend service. You can specify a service that is created in the Enterprise Distributed Application Service (EDAS) console.
     *   serviceName: the name of the backend service.
     *   servicePort: the port of the backend service.
     *
     * @example {"rules":[{"host":"abc.com","secretName":"tls-secret","paths":[{"path":"/path","backend":{"servicePort":80,"serviceName":"xxx"}}]}]}
     *
     * @var mixed[]
     */
    public $ingressConf;

    /**
     * @description The labels.
     *
     * @example {\"test-label\":\"test-label-value\"}
     *
     * @var string
     */
    public $labels;

    /**
     * @description The name of the Ingress. The name can contain lowercase letters, digits, and hyphens (-). It must start with a lowercase letter but cannot end with a hyphen (-). The name can be up to 63 characters in length.
     *
     * @example my-ingress-rule
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'annotations' => 'Annotations',
        'clusterId'   => 'ClusterId',
        'ingressConf' => 'IngressConf',
        'labels'      => 'Labels',
        'name'        => 'Name',
        'namespace'   => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ingressConf) {
            $res['IngressConf'] = $this->ingressConf;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sIngressRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IngressConf'])) {
            $model->ingressConf = $map['IngressConf'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
