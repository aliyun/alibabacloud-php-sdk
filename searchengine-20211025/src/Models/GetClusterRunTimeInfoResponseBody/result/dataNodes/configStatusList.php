<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes;

use AlibabaCloud\Tea\Model;

class configStatusList extends Model
{
    /**
     * @description The time when the configuration was last updated.
     *
     * @example ""
     *
     * @var string
     */
    public $configUpdateTime;

    /**
     * @description The configuration progress. Unit: percentage.
     *
     * @example 100
     *
     * @var int
     */
    public $donePercent;

    /**
     * @description The number of processed Searcher workers in the cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $doneSize;

    /**
     * @description The cluster name.
     *
     * @example test_0704
     *
     * @var string
     */
    public $name;

    /**
     * @description The total number of Searcher workers in the cluster.
     *
     * @example 0
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'configUpdateTime' => 'configUpdateTime',
        'donePercent'      => 'donePercent',
        'doneSize'         => 'doneSize',
        'name'             => 'name',
        'totalSize'        => 'totalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configUpdateTime) {
            $res['configUpdateTime'] = $this->configUpdateTime;
        }
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
     * @return configStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configUpdateTime'])) {
            $model->configUpdateTime = $map['configUpdateTime'];
        }
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
