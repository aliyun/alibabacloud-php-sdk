<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentsResponseBody\experiments;
use AlibabaCloud\Tea\Model;

class ListExperimentsResponseBody extends Model
{
    /**
     * @var experiments[]
     */
    public $experiments;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'experiments' => 'Experiments',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experiments) {
            $res['Experiments'] = [];
            if (null !== $this->experiments && \is_array($this->experiments)) {
                $n = 0;
                foreach ($this->experiments as $item) {
                    $res['Experiments'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListExperimentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Experiments'])) {
            if (!empty($map['Experiments'])) {
                $model->experiments = [];
                $n                  = 0;
                foreach ($map['Experiments'] as $item) {
                    $model->experiments[$n++] = null !== $item ? experiments::fromMap($item) : $item;
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
