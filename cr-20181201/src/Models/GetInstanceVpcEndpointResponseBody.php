<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponseBody\linkedVpcs;
use AlibabaCloud\Tea\Model;

class GetInstanceVpcEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $domains;

    /**
     * @var linkedVpcs[]
     */
    public $linkedVpcs;
    protected $_name = [
        'code'       => 'Code',
        'isSuccess'  => 'IsSuccess',
        'requestId'  => 'RequestId',
        'enable'     => 'Enable',
        'domains'    => 'Domains',
        'linkedVpcs' => 'LinkedVpcs',
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
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
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

        return $model;
    }
}
