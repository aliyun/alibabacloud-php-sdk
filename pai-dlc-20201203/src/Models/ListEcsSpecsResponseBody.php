<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListEcsSpecsResponseBody extends Model
{
    /**
     * @description The list of ECS specifications.
     *
     * @var EcsSpec[]
     */
    public $ecsSpecs;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of types that meet the filter conditions.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ecsSpecs' => 'EcsSpecs',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsSpecs) {
            $res['EcsSpecs'] = [];
            if (null !== $this->ecsSpecs && \is_array($this->ecsSpecs)) {
                $n = 0;
                foreach ($this->ecsSpecs as $item) {
                    $res['EcsSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListEcsSpecsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsSpecs'])) {
            if (!empty($map['EcsSpecs'])) {
                $model->ecsSpecs = [];
                $n = 0;
                foreach ($map['EcsSpecs'] as $item) {
                    $model->ecsSpecs[$n++] = null !== $item ? EcsSpec::fromMap($item) : $item;
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
