<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetConfigResponseBody\targetConfigs;

class DescribeVulTargetConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var targetConfigs[]
     */
    public $targetConfigs;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'     => 'RequestId',
        'targetConfigs' => 'TargetConfigs',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->targetConfigs)) {
            Model::validateArray($this->targetConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->targetConfigs) {
            if (\is_array($this->targetConfigs)) {
                $res['TargetConfigs'] = [];
                $n1                   = 0;
                foreach ($this->targetConfigs as $item1) {
                    $res['TargetConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TargetConfigs'])) {
            if (!empty($map['TargetConfigs'])) {
                $model->targetConfigs = [];
                $n1                   = 0;
                foreach ($map['TargetConfigs'] as $item1) {
                    $model->targetConfigs[$n1++] = targetConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
