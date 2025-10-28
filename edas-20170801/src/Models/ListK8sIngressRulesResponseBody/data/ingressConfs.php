<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules;

class ingressConfs extends Model
{
    /**
     * @var string
     */
    public $albId;

    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dashboardUrl;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $ingressType;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $mseGatewayId;

    /**
     * @var string
     */
    public $mseGatewayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $officalBasicUrl;

    /**
     * @var string
     */
    public $officalRequestUrl;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var bool
     */
    public $sslRedirect;
    protected $_name = [
        'albId' => 'AlbId',
        'annotations' => 'Annotations',
        'creationTime' => 'CreationTime',
        'dashboardUrl' => 'DashboardUrl',
        'endpoint' => 'Endpoint',
        'ingressType' => 'IngressType',
        'labels' => 'Labels',
        'mseGatewayId' => 'MseGatewayId',
        'mseGatewayName' => 'MseGatewayName',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'officalBasicUrl' => 'OfficalBasicUrl',
        'officalRequestUrl' => 'OfficalRequestUrl',
        'rules' => 'Rules',
        'sslRedirect' => 'SslRedirect',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albId) {
            $res['AlbId'] = $this->albId;
        }

        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->dashboardUrl) {
            $res['DashboardUrl'] = $this->dashboardUrl;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->ingressType) {
            $res['IngressType'] = $this->ingressType;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->mseGatewayId) {
            $res['MseGatewayId'] = $this->mseGatewayId;
        }

        if (null !== $this->mseGatewayName) {
            $res['MseGatewayName'] = $this->mseGatewayName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->officalBasicUrl) {
            $res['OfficalBasicUrl'] = $this->officalBasicUrl;
        }

        if (null !== $this->officalRequestUrl) {
            $res['OfficalRequestUrl'] = $this->officalRequestUrl;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sslRedirect) {
            $res['SslRedirect'] = $this->sslRedirect;
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
        if (isset($map['AlbId'])) {
            $model->albId = $map['AlbId'];
        }

        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DashboardUrl'])) {
            $model->dashboardUrl = $map['DashboardUrl'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['IngressType'])) {
            $model->ingressType = $map['IngressType'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['MseGatewayId'])) {
            $model->mseGatewayId = $map['MseGatewayId'];
        }

        if (isset($map['MseGatewayName'])) {
            $model->mseGatewayName = $map['MseGatewayName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['OfficalBasicUrl'])) {
            $model->officalBasicUrl = $map['OfficalBasicUrl'];
        }

        if (isset($map['OfficalRequestUrl'])) {
            $model->officalRequestUrl = $map['OfficalRequestUrl'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SslRedirect'])) {
            $model->sslRedirect = $map['SslRedirect'];
        }

        return $model;
    }
}
