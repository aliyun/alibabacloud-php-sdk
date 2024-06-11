<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecResponseBody\specInfoModel;
use AlibabaCloud\Tea\Model;

class DescribeSpecResponseBody extends Model
{
    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example D9888DAD-331E-5FBC-B5A0-F2445115****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var specInfoModel[]
     */
    public $specInfoModel;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'specInfoModel' => 'SpecInfoModel',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specInfoModel) {
            $res['SpecInfoModel'] = [];
            if (null !== $this->specInfoModel && \is_array($this->specInfoModel)) {
                $n = 0;
                foreach ($this->specInfoModel as $item) {
                    $res['SpecInfoModel'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeSpecResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpecInfoModel'])) {
            if (!empty($map['SpecInfoModel'])) {
                $model->specInfoModel = [];
                $n                    = 0;
                foreach ($map['SpecInfoModel'] as $item) {
                    $model->specInfoModel[$n++] = null !== $item ? specInfoModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
