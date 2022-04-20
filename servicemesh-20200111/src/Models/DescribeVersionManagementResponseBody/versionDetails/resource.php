<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionManagementResponseBody\versionDetails;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $CPULimit;

    /**
     * @var string
     */
    public $CPURequest;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $memoryRequest;
    protected $_name = [
        'CPULimit'      => 'CPULimit',
        'CPURequest'    => 'CPURequest',
        'memoryLimit'   => 'MemoryLimit',
        'memoryRequest' => 'MemoryRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPULimit) {
            $res['CPULimit'] = $this->CPULimit;
        }
        if (null !== $this->CPURequest) {
            $res['CPURequest'] = $this->CPURequest;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRequest) {
            $res['MemoryRequest'] = $this->memoryRequest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPULimit'])) {
            $model->CPULimit = $map['CPULimit'];
        }
        if (isset($map['CPURequest'])) {
            $model->CPURequest = $map['CPURequest'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['MemoryRequest'])) {
            $model->memoryRequest = $map['MemoryRequest'];
        }

        return $model;
    }
}
