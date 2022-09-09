<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationResponseBody\parameterSets;
use AlibabaCloud\Tea\Model;

class ListParameterSetRelationResponseBody extends Model
{
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
     * @return ListParameterSetRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
