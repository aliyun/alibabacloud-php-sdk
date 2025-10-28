<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\certDetail;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\data;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\relatedApps;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sSecretsResponseBody\result\secrets\relatedIngressRules;

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
        'base64Encoded' => 'Base64Encoded',
        'certDetail' => 'CertDetail',
        'certId' => 'CertId',
        'certRegionId' => 'CertRegionId',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'creationTime' => 'CreationTime',
        'data' => 'Data',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'relatedApps' => 'RelatedApps',
        'relatedIngressRules' => 'RelatedIngressRules',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->certDetail) {
            $this->certDetail->validate();
        }
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->relatedApps)) {
            Model::validateArray($this->relatedApps);
        }
        if (\is_array($this->relatedIngressRules)) {
            Model::validateArray($this->relatedIngressRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->base64Encoded) {
            $res['Base64Encoded'] = $this->base64Encoded;
        }

        if (null !== $this->certDetail) {
            $res['CertDetail'] = null !== $this->certDetail ? $this->certDetail->toArray($noStream) : $this->certDetail;
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
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->relatedApps)) {
                $res['RelatedApps'] = [];
                $n1 = 0;
                foreach ($this->relatedApps as $item1) {
                    $res['RelatedApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relatedIngressRules) {
            if (\is_array($this->relatedIngressRules)) {
                $res['RelatedIngressRules'] = [];
                $n1 = 0;
                foreach ($this->relatedIngressRules as $item1) {
                    $res['RelatedIngressRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['RelatedApps'] as $item1) {
                    $model->relatedApps[$n1] = relatedApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RelatedIngressRules'])) {
            if (!empty($map['RelatedIngressRules'])) {
                $model->relatedIngressRules = [];
                $n1 = 0;
                foreach ($map['RelatedIngressRules'] as $item1) {
                    $model->relatedIngressRules[$n1] = relatedIngressRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
