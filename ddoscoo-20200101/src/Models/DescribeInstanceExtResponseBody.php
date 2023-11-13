<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceExtResponseBody\instanceExtSpecs;
use AlibabaCloud\Tea\Model;

class DescribeInstanceExtResponseBody extends Model
{
    /**
     * @var instanceExtSpecs[]
     */
    public $instanceExtSpecs;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceExtSpecs' => 'InstanceExtSpecs',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceExtSpecs) {
            $res['InstanceExtSpecs'] = [];
            if (null !== $this->instanceExtSpecs && \is_array($this->instanceExtSpecs)) {
                $n = 0;
                foreach ($this->instanceExtSpecs as $item) {
                    $res['InstanceExtSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceExtResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceExtSpecs'])) {
            if (!empty($map['InstanceExtSpecs'])) {
                $model->instanceExtSpecs = [];
                $n                       = 0;
                foreach ($map['InstanceExtSpecs'] as $item) {
                    $model->instanceExtSpecs[$n++] = null !== $item ? instanceExtSpecs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
