<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\queryNode;

use AlibabaCloud\Tea\Model;

class configStatusList extends Model
{
    /**
     * @description configUpdateTime
     *
     * @example " "
     *
     * @var string
     */
    public $configUpdateTime;

    /**
     * @description donePercent
     *
     * @example 100
     *
     * @var int
     */
    public $donePercent;

    /**
     * @description doneSize
     *
     * @example 100
     *
     * @var int
     */
    public $doneSize;

    /**
     * @description name
     *
     * @example ha-cn-zvp2qr1sk01_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description totalSize
     *
     * @example 6
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
