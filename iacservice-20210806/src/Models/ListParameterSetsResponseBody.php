<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetsResponseBody\parameterSets;
use AlibabaCloud\Tea\Model;

class ListParameterSetsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var parameterSets[]
     */
    public $parameterSets;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'    => 'pageNumber',
        'pageSize'      => 'pageSize',
        'parameterSets' => 'parameterSets',
        'requestId'     => 'requestId',
        'totalCount'    => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->parameterSets) {
            $res['parameterSets'] = [];
            if (null !== $this->parameterSets && \is_array($this->parameterSets)) {
                $n = 0;
                foreach ($this->parameterSets as $item) {
                    $res['parameterSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListParameterSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['parameterSets'])) {
            if (!empty($map['parameterSets'])) {
                $model->parameterSets = [];
                $n                    = 0;
                foreach ($map['parameterSets'] as $item) {
                    $model->parameterSets[$n++] = null !== $item ? parameterSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
