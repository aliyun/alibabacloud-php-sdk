<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateInfoResponseBody\data;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateInfoResponseBody\data\designateDetailVos\metrics;
use AlibabaCloud\Tea\Model;

class designateDetailVos extends Model
{
    /**
     * @example FREE
     *
     * @var string
     */
    public $busy;

    /**
     * @example true
     *
     * @var bool
     */
    public $checked;

    /**
     * @example 10.52.169.25
     *
     * @var string
     */
    public $key;

    /**
     * @var metrics
     */
    public $metrics;

    /**
     * @example fasle
     *
     * @var bool
     */
    public $offline;

    /**
     * @example 1
     *
     * @var int
     */
    public $size;

    /**
     * @example pod
     *
     * @var string
     */
    public $starter;

    /**
     * @example 1.12.5
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'busy' => 'Busy',
        'checked' => 'Checked',
        'key' => 'Key',
        'metrics' => 'Metrics',
        'offline' => 'Offline',
        'size' => 'Size',
        'starter' => 'Starter',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->busy) {
            $res['Busy'] = $this->busy;
        }
        if (null !== $this->checked) {
            $res['Checked'] = $this->checked;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->offline) {
            $res['Offline'] = $this->offline;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->starter) {
            $res['Starter'] = $this->starter;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return designateDetailVos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Busy'])) {
            $model->busy = $map['Busy'];
        }
        if (isset($map['Checked'])) {
            $model->checked = $map['Checked'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['Offline'])) {
            $model->offline = $map['Offline'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Starter'])) {
            $model->starter = $map['Starter'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
