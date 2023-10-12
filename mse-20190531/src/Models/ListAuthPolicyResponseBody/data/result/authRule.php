<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListAuthPolicyResponseBody\data\result\authRule\method;
use AlibabaCloud\Tea\Model;

class authRule extends Model
{
    /**
     * @description The IDs of applications.
     *
     * @var string[]
     */
    public $appIds;

    /**
     * @description The rule type. Valid values:
     *
     *   0: by application
     *   1: by namespace
     *
     * @example 0
     *
     * @var int
     */
    public $authType;

    /**
     * @description Indicates whether the rule is a blacklist rule.
     *
     * @example false
     *
     * @var bool
     */
    public $black;

    /**
     * @description The queried namespaces.
     *
     * @var string[]
     */
    public $k8sNamespaces;

    /**
     * @description The request method.
     *
     * @var method
     */
    public $method;

    /**
     * @description The service path.
     *
     * @example /a
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'appIds'        => 'AppIds',
        'authType'      => 'AuthType',
        'black'         => 'Black',
        'k8sNamespaces' => 'K8sNamespaces',
        'method'        => 'Method',
        'path'          => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->black) {
            $res['Black'] = $this->black;
        }
        if (null !== $this->k8sNamespaces) {
            $res['K8sNamespaces'] = $this->k8sNamespaces;
        }
        if (null !== $this->method) {
            $res['Method'] = null !== $this->method ? $this->method->toMap() : null;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = $map['AppIds'];
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
                $model->k8sNamespaces = $map['K8sNamespaces'];
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
