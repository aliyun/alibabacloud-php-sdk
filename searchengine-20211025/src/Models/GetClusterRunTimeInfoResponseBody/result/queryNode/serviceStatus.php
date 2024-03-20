<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\queryNode;

use AlibabaCloud\Tea\Model;

class serviceStatus extends Model
{
    /**
     * @description The progress.
     *
     * @example 100
     *
     * @var int
     */
    public $donePercent;

    /**
     * @description The number of nodes that are configured.
     *
     * @example 100
     *
     * @var int
     */
    public $doneSize;

    /**
     * @description The name of the cluster.
     *
     * @example ha-cn-c4d2rq7nt04_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The total number of nodes that you specify when you create the cluster.
     *
     * @example 100
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'donePercent' => 'donePercent',
        'doneSize'    => 'doneSize',
        'name'        => 'name',
        'totalSize'   => 'totalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->donePercent) {
            $res['donePercent'] = $this->donePercent;
        }
        if (null !== $this->doneSize) {
            $res['doneSize'] = $this->doneSize;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->totalSize) {
            $res['totalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['donePercent'])) {
            $model->donePercent = $map['donePercent'];
        }
        if (isset($map['doneSize'])) {
            $model->doneSize = $map['doneSize'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['totalSize'])) {
            $model->totalSize = $map['totalSize'];
        }

        return $model;
    }
}
