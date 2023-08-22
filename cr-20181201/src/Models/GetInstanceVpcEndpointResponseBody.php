<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponseBody\linkedVpcs;
use AlibabaCloud\Tea\Model;

class GetInstanceVpcEndpointResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $domains;

    /**
     * @description Indicates whether the access control list (ACL) feature is enabled. Valid values:
     *
     *   `true`: The ACL feature is enabled.
     *   `false`: The ACL feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   `true`: The request is successful.
     *   `false`: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The VPCs in which the instance is deployed.
     *
     * @var linkedVpcs[]
     */
    public $linkedVpcs;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @description The ID of the request.
     *
     * @example BAE9349D-A587-4F9A-B574-9DA0EF2638D1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'       => 'Code',
        'domains'    => 'Domains',
        'enable'     => 'Enable',
        'isSuccess'  => 'IsSuccess',
        'linkedVpcs' => 'LinkedVpcs',
        'moduleName' => 'ModuleName',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->linkedVpcs) {
            $res['LinkedVpcs'] = [];
            if (null !== $this->linkedVpcs && \is_array($this->linkedVpcs)) {
                $n = 0;
                foreach ($this->linkedVpcs as $item) {
                    $res['LinkedVpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceVpcEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['LinkedVpcs'])) {
            if (!empty($map['LinkedVpcs'])) {
                $model->linkedVpcs = [];
                $n                 = 0;
                foreach ($map['LinkedVpcs'] as $item) {
                    $model->linkedVpcs[$n++] = null !== $item ? linkedVpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
