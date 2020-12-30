<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigResponseBody\domainConfigs\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var functionArgs[]
     */
    public $functionArgs;
    protected $_name = [
        'status'       => 'Status',
        'configId'     => 'ConfigId',
        'functionName' => 'FunctionName',
        'functionArgs' => 'FunctionArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
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

        return $model;
    }
}
