<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetConfigResponseBody\targetConfigs;
use AlibabaCloud\Tea\Model;

class DescribeVulTargetConfigResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 9FBC6E47-7508-58C9-9E76-528E118CB1CC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the configurations.
     *
     * @var targetConfigs[]
     */
    public $targetConfigs;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->targetConfigs) {
            $res['TargetConfigs'] = [];
            if (null !== $this->targetConfigs && \is_array($this->targetConfigs)) {
                $n = 0;
                foreach ($this->targetConfigs as $item) {
                    $res['TargetConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulTargetConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TargetConfigs'])) {
            if (!empty($map['TargetConfigs'])) {
                $model->targetConfigs = [];
                $n                    = 0;
                foreach ($map['TargetConfigs'] as $item) {
                    $model->targetConfigs[$n++] = null !== $item ? targetConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
