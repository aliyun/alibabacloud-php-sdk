<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetInstanceVpcEndpointResponseBody\linkedVpcs;

class GetInstanceVpcEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $domains;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var linkedVpcs[]
     */
    public $linkedVpcs;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'domains' => 'Domains',
        'enable' => 'Enable',
        'isSuccess' => 'IsSuccess',
        'linkedVpcs' => 'LinkedVpcs',
        'moduleName' => 'ModuleName',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        if (\is_array($this->linkedVpcs)) {
            Model::validateArray($this->linkedVpcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['Domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['Domains'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->linkedVpcs) {
            if (\is_array($this->linkedVpcs)) {
                $res['LinkedVpcs'] = [];
                $n1 = 0;
                foreach ($this->linkedVpcs as $item1) {
                    $res['LinkedVpcs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['Domains'] as $item1) {
                    $model->domains[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['LinkedVpcs'] as $item1) {
                    $model->linkedVpcs[$n1++] = linkedVpcs::fromMap($item1);
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
