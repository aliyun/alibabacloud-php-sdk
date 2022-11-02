<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourcesResponseBody\resources;
use AlibabaCloud\Tea\Model;

class DescribeDefenseResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'resources'  => 'Resources',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDefenseResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
