<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentStatusResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\UpdateExperimentStatusResponseBody\result\algorithms;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The algorithm configurations.
     *
     * @var algorithms[]
     */
    public $algorithms;

    /**
     * @description Indicates whether the default configurations are used for the experiment.
     *
     * @example true
     *
     * @var bool
     */
    public $base;

    /**
     * @description The buckets. This parameter takes effect only when the experiment is published.
     *
     * @var string[]
     */
    public $buckets;

    /**
     * @description The remarks of the experiment.
     *
     * @example xxx
     *
     * @var string
     */
    public $description;

    /**
     * @description The experiment ID.
     *
     * @example 123
     *
     * @var string
     */
    public $experimentId;

    /**
     * @description The experiment name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the experiment was unpublished.
     *
     * @example 2020-11-11T09:47:43.000Z
     *
     * @var string
     */
    public $offlineTime;

    /**
     * @description The time when the experiment was published.
     *
     * @example 2020-11-11T09:47:43.000Z
     *
     * @var string
     */
    public $onlineTime;

    /**
     * @description The experiment state. Valid values: init, online, finish, and offline.
     *
     * @example init
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'algorithms'   => 'algorithms',
        'base'         => 'base',
        'buckets'      => 'buckets',
        'description'  => 'description',
        'experimentId' => 'experimentId',
        'name'         => 'name',
        'offlineTime'  => 'offlineTime',
        'onlineTime'   => 'onlineTime',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithms) {
            $res['algorithms'] = [];
            if (null !== $this->algorithms && \is_array($this->algorithms)) {
                $n = 0;
                foreach ($this->algorithms as $item) {
                    $res['algorithms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->base) {
            $res['base'] = $this->base;
        }
        if (null !== $this->buckets) {
            $res['buckets'] = $this->buckets;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->experimentId) {
            $res['experimentId'] = $this->experimentId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->offlineTime) {
            $res['offlineTime'] = $this->offlineTime;
        }
        if (null !== $this->onlineTime) {
            $res['onlineTime'] = $this->onlineTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithms'])) {
            if (!empty($map['algorithms'])) {
                $model->algorithms = [];
                $n                 = 0;
                foreach ($map['algorithms'] as $item) {
                    $model->algorithms[$n++] = null !== $item ? algorithms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['base'])) {
            $model->base = $map['base'];
        }
        if (isset($map['buckets'])) {
            if (!empty($map['buckets'])) {
                $model->buckets = $map['buckets'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['experimentId'])) {
            $model->experimentId = $map['experimentId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['offlineTime'])) {
            $model->offlineTime = $map['offlineTime'];
        }
        if (isset($map['onlineTime'])) {
            $model->onlineTime = $map['onlineTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
