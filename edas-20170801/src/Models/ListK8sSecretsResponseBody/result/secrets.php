<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\certDetail;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\data;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\relatedApps;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\relatedIngressRules;
use AlibabaCloud\Tea\Model;

class secrets extends Model
{
    /**
     * @description Indicates whether the data is Base64-encoded. Valid values:
     *
     *   true: The data is Base64-encoded.
     *   false: The data is not Base64-encoded.
     *
     * @example false
     *
     * @var bool
     */
    public $base64Encoded;

    /**
     * @description The details of the Secure Sockets Layer (SSL) certificate.
     *
     * @var certDetail
     */
    public $certDetail;

    /**
     * @description The ID of the certificate provided by Alibaba Cloud Certificate Management Service.
     *
     * @example 123456
     *
     * @var string
     */
    public $certId;

    /**
     * @description The region in which the certificate is stored.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $certRegionId;

    /**
     * @description The ID of the cluster in Enterprise Distributed Application Service (EDAS).
     *
     * @example 4472a6d3-f01d-4087-85a7-3dc52********
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example test-cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The time when the Secret was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-05-26T02:57:02Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The data of the Kubernetes Secret.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The name of the Secret. The name must start with a letter, and can contain digits, letters, and hyphens (-). It can be up to 63 characters in length.
     *
     * @example my-secret
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

    /**
     * @description Applications that use the Secret.
     *
     * @var relatedApps[]
     */
    public $relatedApps;

    /**
     * @description Rules in the Ingress that is associated with the Secret.
     *
     * @var relatedIngressRules[]
     */
    public $relatedIngressRules;

    /**
     * @description The type of the Secret. Valid values:
     *
     *   Opaque: user-defined data
     *   kubernetes.io/tls: Transport Layer Security (TLS) certificate
     *
     * @example Opaque
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'base64Encoded'       => 'Base64Encoded',
        'certDetail'          => 'CertDetail',
        'certId'              => 'CertId',
        'certRegionId'        => 'CertRegionId',
        'clusterId'           => 'ClusterId',
        'clusterName'         => 'ClusterName',
        'creationTime'        => 'CreationTime',
        'data'                => 'Data',
        'name'                => 'Name',
        'namespace'           => 'Namespace',
        'relatedApps'         => 'RelatedApps',
        'relatedIngressRules' => 'RelatedIngressRules',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->base64Encoded) {
            $res['Base64Encoded'] = $this->base64Encoded;
        }
        if (null !== $this->certDetail) {
            $res['CertDetail'] = null !== $this->certDetail ? $this->certDetail->toMap() : null;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certRegionId) {
            $res['CertRegionId'] = $this->certRegionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->relatedApps) {
            $res['RelatedApps'] = [];
            if (null !== $this->relatedApps && \is_array($this->relatedApps)) {
                $n = 0;
                foreach ($this->relatedApps as $item) {
                    $res['RelatedApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relatedIngressRules) {
            $res['RelatedIngressRules'] = [];
            if (null !== $this->relatedIngressRules && \is_array($this->relatedIngressRules)) {
                $n = 0;
                foreach ($this->relatedIngressRules as $item) {
                    $res['RelatedIngressRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secrets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base64Encoded'])) {
            $model->base64Encoded = $map['Base64Encoded'];
        }
        if (isset($map['CertDetail'])) {
            $model->certDetail = certDetail::fromMap($map['CertDetail']);
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertRegionId'])) {
            $model->certRegionId = $map['CertRegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RelatedApps'])) {
            if (!empty($map['RelatedApps'])) {
                $model->relatedApps = [];
                $n                  = 0;
                foreach ($map['RelatedApps'] as $item) {
                    $model->relatedApps[$n++] = null !== $item ? relatedApps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelatedIngressRules'])) {
            if (!empty($map['RelatedIngressRules'])) {
                $model->relatedIngressRules = [];
                $n                          = 0;
                foreach ($map['RelatedIngressRules'] as $item) {
                    $model->relatedIngressRules[$n++] = null !== $item ? relatedIngressRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
