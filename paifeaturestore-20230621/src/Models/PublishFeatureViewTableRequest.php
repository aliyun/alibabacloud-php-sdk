<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class PublishFeatureViewTableRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $eventTime;

    /**
     * @example Overwrite
     *
     * @var string
     */
    public $mode;

    /**
     * @example true
     *
     * @var bool
     */
    public $offlineToOnline;

    /**
     * @var mixed[][]
     */
    public $partitions;
    protected $_name = [
        'config'          => 'Config',
        'eventTime'       => 'EventTime',
        'mode'            => 'Mode',
        'offlineToOnline' => 'OfflineToOnline',
        'partitions'      => 'Partitions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->offlineToOnline) {
            $res['OfflineToOnline'] = $this->offlineToOnline;
        }
        if (null !== $this->partitions) {
            $res['Partitions'] = $this->partitions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishFeatureViewTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OfflineToOnline'])) {
            $model->offlineToOnline = $map['OfflineToOnline'];
        }
        if (isset($map['Partitions'])) {
            $model->partitions = $map['Partitions'];
        }

        return $model;
    }
}
