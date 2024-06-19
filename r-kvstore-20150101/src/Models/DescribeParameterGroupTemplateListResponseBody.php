<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupTemplateListResponseBody\parameters;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupTemplateListResponseBody extends Model
{
    /**
     * @description The compatible engine version. Valid values:
     *
     * ApsaraDB for Redis Community Edition: 5.0, 6.0, and 7.0. Tair DRAM-based instances: 5.0 and 6.0. Tair persistent memory-optimized instances: 6.0. Tair ESSD-based instances: 4.0.
     * @example 5
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The information about parameters.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description Id of the request
     *
     * @example 5D622714-AEDD-4609-9167-F5DDD3D1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'engineVersion' => 'EngineVersion',
        'parameters'    => 'Parameters',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupTemplateListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
