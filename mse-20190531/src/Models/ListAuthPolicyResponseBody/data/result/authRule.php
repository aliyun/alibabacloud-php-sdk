<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result\authRule\method;

class authRule extends Model
{
    /**
     * @var string[]
     */
    public $appIds;

    /**
     * @var int
     */
    public $authType;

    /**
     * @var bool
     */
    public $black;

    /**
     * @var string[]
     */
    public $k8sNamespaces;

    /**
     * @var method
     */
    public $method;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'appIds' => 'AppIds',
        'authType' => 'AuthType',
        'black' => 'Black',
        'k8sNamespaces' => 'K8sNamespaces',
        'method' => 'Method',
        'path' => 'Path',
    ];

    public function validate()
    {
        if (\is_array($this->appIds)) {
            Model::validateArray($this->appIds);
        }
        if (\is_array($this->k8sNamespaces)) {
            Model::validateArray($this->k8sNamespaces);
        }
        if (null !== $this->method) {
            $this->method->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIds) {
            if (\is_array($this->appIds)) {
                $res['AppIds'] = [];
                $n1 = 0;
                foreach ($this->appIds as $item1) {
                    $res['AppIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->black) {
            $res['Black'] = $this->black;
        }

        if (null !== $this->k8sNamespaces) {
            if (\is_array($this->k8sNamespaces)) {
                $res['K8sNamespaces'] = [];
                $n1 = 0;
                foreach ($this->k8sNamespaces as $item1) {
                    $res['K8sNamespaces'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->method) {
            $res['Method'] = null !== $this->method ? $this->method->toArray($noStream) : $this->method;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = [];
                $n1 = 0;
                foreach ($map['AppIds'] as $item1) {
                    $model->appIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['Black'])) {
            $model->black = $map['Black'];
        }

        if (isset($map['K8sNamespaces'])) {
            if (!empty($map['K8sNamespaces'])) {
                $model->k8sNamespaces = [];
                $n1 = 0;
                foreach ($map['K8sNamespaces'] as $item1) {
                    $model->k8sNamespaces[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Method'])) {
            $model->method = method::fromMap($map['Method']);
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
