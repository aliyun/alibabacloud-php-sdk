<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterResponseBody\costCenterOperateDto;
use AlibabaCloud\Tea\Model;

class ModifyCostCenterResponseBody extends Model
{
    /**
     * @var costCenterOperateDto[]
     */
    public $costCenterOperateDto;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example 6000EE23-274B-4E07-A697-FF2E999520A4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costCenterOperateDto' => 'CostCenterOperateDto',
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterOperateDto) {
            $res['CostCenterOperateDto'] = [];
            if (null !== $this->costCenterOperateDto && \is_array($this->costCenterOperateDto)) {
                $n = 0;
                foreach ($this->costCenterOperateDto as $item) {
                    $res['CostCenterOperateDto'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCostCenterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterOperateDto'])) {
            if (!empty($map['CostCenterOperateDto'])) {
                $model->costCenterOperateDto = [];
                $n = 0;
                foreach ($map['CostCenterOperateDto'] as $item) {
                    $model->costCenterOperateDto[$n++] = null !== $item ? costCenterOperateDto::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
