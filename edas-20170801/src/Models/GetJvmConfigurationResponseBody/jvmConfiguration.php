<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetJvmConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class jvmConfiguration extends Model
{
    /**
     * @var int
     */
    public $maxHeapSize;

    /**
     * @var int
     */
    public $maxPermSize;

    /**
     * @var int
     */
    public $minHeapSize;

    /**
     * @var string
     */
    public $options;
    protected $_name = [
        'maxHeapSize' => 'MaxHeapSize',
        'maxPermSize' => 'MaxPermSize',
        'minHeapSize' => 'MinHeapSize',
        'options'     => 'Options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxHeapSize) {
            $res['MaxHeapSize'] = $this->maxHeapSize;
        }
        if (null !== $this->maxPermSize) {
            $res['MaxPermSize'] = $this->maxPermSize;
        }
        if (null !== $this->minHeapSize) {
            $res['MinHeapSize'] = $this->minHeapSize;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
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
        if (isset($map['MaxHeapSize'])) {
            $model->maxHeapSize = $map['MaxHeapSize'];
        }
        if (isset($map['MaxPermSize'])) {
            $model->maxPermSize = $map['MaxPermSize'];
        }
        if (isset($map['MinHeapSize'])) {
            $model->minHeapSize = $map['MinHeapSize'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}
