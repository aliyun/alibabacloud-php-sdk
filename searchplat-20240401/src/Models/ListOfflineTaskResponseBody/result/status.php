<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result;

use AlibabaCloud\Dara\Model;

class status extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $metricData;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'metricData' => 'MetricData',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->metricData)) {
            Model::validateArray($this->metricData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->metricData) {
            if (\is_array($this->metricData)) {
                $res['MetricData'] = [];
                foreach ($this->metricData as $key1 => $value1) {
                    $res['MetricData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['MetricData'])) {
            if (!empty($map['MetricData'])) {
                $model->metricData = [];
                foreach ($map['MetricData'] as $key1 => $value1) {
                    $model->metricData[$key1] = $value1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
