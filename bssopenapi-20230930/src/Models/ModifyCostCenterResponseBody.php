<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterResponseBody\costCenterOperateDto;

class ModifyCostCenterResponseBody extends Model
{
    /**
     * @var costCenterOperateDto[]
     */
    public $costCenterOperateDto;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costCenterOperateDto' => 'CostCenterOperateDto',
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->costCenterOperateDto)) {
            Model::validateArray($this->costCenterOperateDto);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterOperateDto) {
            if (\is_array($this->costCenterOperateDto)) {
                $res['CostCenterOperateDto'] = [];
                $n1 = 0;
                foreach ($this->costCenterOperateDto as $item1) {
                    $res['CostCenterOperateDto'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterOperateDto'])) {
            if (!empty($map['CostCenterOperateDto'])) {
                $model->costCenterOperateDto = [];
                $n1 = 0;
                foreach ($map['CostCenterOperateDto'] as $item1) {
                    $model->costCenterOperateDto[$n1] = costCenterOperateDto::fromMap($item1);
                    ++$n1;
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
