<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sSecretRequest extends Model
{
    /**
     * @description Specifies whether the data has been encoded in Base64.
     *
     * @example false
     *
     * @var bool
     */
    public $base64Encoded;

    /**
     * @description The ID of the certificate.
     *
     * @example 6650277
     *
     * @var string
     */
    public $certId;

    /**
     * @description The region ID of the certificate.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $certRegionId;

    /**
     * @description The ID of the cluster.
     *
     * @example 9c28bbb9-****-44b3-b953-54ef8a2d0be2
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The data of the Secret. The value must be a JSON array that contains the following information:
     *
     *   Key: Secret key
     *   Value: Secret value
     *
     * @example [{"Key":"name","Value":"william"},{"Key":"age","Value":"12"}]
     *
     * @var string
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
     * @description The type of the Secret. Valid values:
     *
     *   Opaque: user-defined data type
     *   kubernetes.io/tls: Transport Layer Security (TLS) certificate type
     *
     * @example Opaque
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'base64Encoded' => 'Base64Encoded',
        'certId'        => 'CertId',
        'certRegionId'  => 'CertRegionId',
        'clusterId'     => 'ClusterId',
        'data'          => 'Data',
        'name'          => 'Name',
        'namespace'     => 'Namespace',
        'type'          => 'Type',
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
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certRegionId) {
            $res['CertRegionId'] = $this->certRegionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base64Encoded'])) {
            $model->base64Encoded = $map['Base64Encoded'];
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
