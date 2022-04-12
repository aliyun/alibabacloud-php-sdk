<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules;
use AlibabaCloud\Tea\Model;

class ingressConfs extends Model
{
    /**
     * @var string
     */
    public $albId;

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
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var bool
     */
    public $sslRedirect;
    protected $_name = [
        'albId'        => 'AlbId',
        'creationTime' => 'CreationTime',
        'dashboardUrl' => 'DashboardUrl',
        'endpoint'     => 'Endpoint',
        'ingressType'  => 'IngressType',
        'name'         => 'Name',
        'namespace'    => 'Namespace',
        'rules'        => 'Rules',
        'sslRedirect'  => 'SslRedirect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albId) {
            $res['AlbId'] = $this->albId;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sslRedirect) {
            $res['SslRedirect'] = $this->sslRedirect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressConfs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbId'])) {
            $model->albId = $map['AlbId'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SslRedirect'])) {
            $model->sslRedirect = $map['SslRedirect'];
        }

        return $model;
    }
}
