<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetClusterScannerYamlResponseBody extends Model
{
    /**
     * @var string
     */
    public $caCertBase64;

    /**
     * @var string
     */
    public $clusterEnvInfo;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tlsCertBase64;

    /**
     * @var string
     */
    public $tlsKeyBase64;

    /**
     * @var int
     */
    public $webhookOpen;
    protected $_name = [
        'caCertBase64' => 'CaCertBase64',
        'clusterEnvInfo' => 'ClusterEnvInfo',
        'clusterId' => 'ClusterId',
        'image' => 'Image',
        'requestId' => 'RequestId',
        'tlsCertBase64' => 'TlsCertBase64',
        'tlsKeyBase64' => 'TlsKeyBase64',
        'webhookOpen' => 'WebhookOpen',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertBase64) {
            $res['CaCertBase64'] = $this->caCertBase64;
        }

        if (null !== $this->clusterEnvInfo) {
            $res['ClusterEnvInfo'] = $this->clusterEnvInfo;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tlsCertBase64) {
            $res['TlsCertBase64'] = $this->tlsCertBase64;
        }

        if (null !== $this->tlsKeyBase64) {
            $res['TlsKeyBase64'] = $this->tlsKeyBase64;
        }

        if (null !== $this->webhookOpen) {
            $res['WebhookOpen'] = $this->webhookOpen;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCertBase64'])) {
            $model->caCertBase64 = $map['CaCertBase64'];
        }

        if (isset($map['ClusterEnvInfo'])) {
            $model->clusterEnvInfo = $map['ClusterEnvInfo'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TlsCertBase64'])) {
            $model->tlsCertBase64 = $map['TlsCertBase64'];
        }

        if (isset($map['TlsKeyBase64'])) {
            $model->tlsKeyBase64 = $map['TlsKeyBase64'];
        }

        if (isset($map['WebhookOpen'])) {
            $model->webhookOpen = $map['WebhookOpen'];
        }

        return $model;
    }
}
