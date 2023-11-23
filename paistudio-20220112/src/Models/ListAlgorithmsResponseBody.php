<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmsResponseBody\algorithms;
use AlibabaCloud\Tea\Model;

class ListAlgorithmsResponseBody extends Model
{
    /**
     * @var algorithms[]
     */
    public $algorithms;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'algorithms' => 'Algorithms',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithms) {
            $res['Algorithms'] = [];
            if (null !== $this->algorithms && \is_array($this->algorithms)) {
                $n = 0;
                foreach ($this->algorithms as $item) {
                    $res['Algorithms'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAlgorithmsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithms'])) {
            if (!empty($map['Algorithms'])) {
                $model->algorithms = [];
                $n                 = 0;
                foreach ($map['Algorithms'] as $item) {
                    $model->algorithms[$n++] = null !== $item ? algorithms::fromMap($item) : $item;
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
