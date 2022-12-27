<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainStagingConfigResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainStagingConfigResponseBody\domainConfigs\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @example 6295
     *
     * @var string
     */
    public $configId;

    /**
     * @var functionArgs[]
     */
    public $functionArgs;

    /**
     * @example aliauth
     *
     * @var string
     */
    public $functionName;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configId'     => 'ConfigId',
        'functionArgs' => 'FunctionArgs',
        'functionName' => 'FunctionName',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->functionArgs) {
            $res['FunctionArgs'] = [];
            if (null !== $this->functionArgs && \is_array($this->functionArgs)) {
                $n = 0;
                foreach ($this->functionArgs as $item) {
                    $res['FunctionArgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionArgs'])) {
            if (!empty($map['FunctionArgs'])) {
                $model->functionArgs = [];
                $n                   = 0;
                foreach ($map['FunctionArgs'] as $item) {
                    $model->functionArgs[$n++] = null !== $item ? functionArgs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
