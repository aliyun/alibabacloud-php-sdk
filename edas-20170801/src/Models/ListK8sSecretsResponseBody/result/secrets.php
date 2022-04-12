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
     * @var bool
     */
    public $base64Encoded;

    /**
     * @var certDetail
     */
    public $certDetail;

    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $certRegionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var relatedApps[]
     */
    public $relatedApps;

    /**
     * @var relatedIngressRules[]
     */
    public $relatedIngressRules;

    /**
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
