<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\rules\ruleActions;

class rules extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $backendProtocol;

    /**
     * @var int
     */
    public $containerPort;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $rewritePath;

    /**
     * @var ruleActions[]
     */
    public $ruleActions;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'backendProtocol' => 'BackendProtocol',
        'containerPort' => 'ContainerPort',
        'domain' => 'Domain',
        'path' => 'Path',
        'rewritePath' => 'RewritePath',
        'ruleActions' => 'RuleActions',
    ];

    public function validate()
    {
        if (\is_array($this->ruleActions)) {
            Model::validateArray($this->ruleActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->backendProtocol) {
            $res['BackendProtocol'] = $this->backendProtocol;
        }

        if (null !== $this->containerPort) {
            $res['ContainerPort'] = $this->containerPort;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->rewritePath) {
            $res['RewritePath'] = $this->rewritePath;
        }

        if (null !== $this->ruleActions) {
            if (\is_array($this->ruleActions)) {
                $res['RuleActions'] = [];
                $n1 = 0;
                foreach ($this->ruleActions as $item1) {
                    $res['RuleActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BackendProtocol'])) {
            $model->backendProtocol = $map['BackendProtocol'];
        }

        if (isset($map['ContainerPort'])) {
            $model->containerPort = $map['ContainerPort'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['RewritePath'])) {
            $model->rewritePath = $map['RewritePath'];
        }

        if (isset($map['RuleActions'])) {
            if (!empty($map['RuleActions'])) {
                $model->ruleActions = [];
                $n1 = 0;
                foreach ($map['RuleActions'] as $item1) {
                    $model->ruleActions[$n1] = ruleActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
