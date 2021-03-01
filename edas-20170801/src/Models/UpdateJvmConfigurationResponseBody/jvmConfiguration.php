<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateJvmConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class jvmConfiguration extends Model
{
    /**
     * @var int
     */
    public $maxPermSize;

    /**
     * @var string
     */
    public $options;

    /**
     * @var int
     */
    public $maxHeapSize;

    /**
     * @var int
     */
    public $minHeapSize;
    protected $_name = [
        'maxPermSize' => 'MaxPermSize',
        'options'     => 'Options',
        'maxHeapSize' => 'MaxHeapSize',
        'minHeapSize' => 'MinHeapSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxPermSize) {
            $res['MaxPermSize'] = $this->maxPermSize;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->maxHeapSize) {
            $res['MaxHeapSize'] = $this->maxHeapSize;
        }
        if (null !== $this->minHeapSize) {
            $res['MinHeapSize'] = $this->minHeapSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jvmConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxPermSize'])) {
            $model->maxPermSize = $map['MaxPermSize'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['MaxHeapSize'])) {
            $model->maxHeapSize = $map['MaxHeapSize'];
        }
        if (isset($map['MinHeapSize'])) {
            $model->minHeapSize = $map['MinHeapSize'];
        }

        return $model;
    }
}
