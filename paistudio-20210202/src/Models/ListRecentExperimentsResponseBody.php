<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListRecentExperimentsResponseBody\experiments;
use AlibabaCloud\Tea\Model;

class ListRecentExperimentsResponseBody extends Model
{
    /**
     * @var experiments[]
     */
    public $experiments;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 23
     *
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
     * @return ListRecentExperimentsResponseBody
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
