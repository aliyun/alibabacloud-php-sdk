<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxDesignateDetailResponseBody\data\designateDetailVos\metrics;

class designateDetailVos extends Model
{
    /**
     * @var string
     */
    public $busy;

    /**
     * @var bool
     */
    public $checked;

    /**
     * @var string
     */
    public $key;

    /**
     * @var metrics
     */
    public $metrics;

    /**
     * @var bool
     */
    public $offline;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $starter;

    /**
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

    public function validate()
    {
        if (null !== $this->metrics) {
            $this->metrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toArray($noStream) : $this->metrics;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
