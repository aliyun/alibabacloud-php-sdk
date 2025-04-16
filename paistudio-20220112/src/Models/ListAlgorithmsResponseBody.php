<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmsResponseBody\algorithms;

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
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->algorithms)) {
            Model::validateArray($this->algorithms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithms) {
            if (\is_array($this->algorithms)) {
                $res['Algorithms'] = [];
                $n1 = 0;
                foreach ($this->algorithms as $item1) {
                    $res['Algorithms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithms'])) {
            if (!empty($map['Algorithms'])) {
                $model->algorithms = [];
                $n1 = 0;
                foreach ($map['Algorithms'] as $item1) {
                    $model->algorithms[$n1++] = algorithms::fromMap($item1);
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
