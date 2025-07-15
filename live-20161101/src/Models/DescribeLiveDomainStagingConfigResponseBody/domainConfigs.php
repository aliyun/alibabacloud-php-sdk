<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStagingConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStagingConfigResponseBody\domainConfigs\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfigs extends Model
{
    /**
     * @description The configuration ID.
     *
     * @example 6295
     *
     * @var string
     */
    public $configId;

    /**
     * @description The configurations of the feature.
     *
     * @var functionArgs[]
     */
    public $functionArgs;

    /**
     * @description The name of the feature.
     *
     * @example aliauth
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The configuration status. Valid values:
     *
     *   **success**
     *   **testing**
     *   **failed**
     *   **configuring**
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configId' => 'ConfigId',
        'functionArgs' => 'FunctionArgs',
        'functionName' => 'FunctionName',
        'status' => 'Status',
    ];

    public function validate() {}

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
                $n = 0;
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
