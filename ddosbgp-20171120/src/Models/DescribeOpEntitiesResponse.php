<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models;

use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeOpEntitiesResponse\opEntities;
use AlibabaCloud\Tea\Model;

class DescribeOpEntitiesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var opEntities[]
     */
    public $opEntities;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'opEntities' => 'OpEntities',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('opEntities', $this->opEntities, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->opEntities) {
            $res['OpEntities'] = [];
            if (null !== $this->opEntities && \is_array($this->opEntities)) {
                $n = 0;
                foreach ($this->opEntities as $item) {
                    $res['OpEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpEntitiesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['OpEntities'])) {
            if (!empty($map['OpEntities'])) {
                $model->opEntities = [];
                $n                 = 0;
                foreach ($map['OpEntities'] as $item) {
                    $model->opEntities[$n++] = null !== $item ? opEntities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
