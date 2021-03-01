<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateJvmConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $options;

    /**
     * @var int
     */
    public $minHeapSize;

    /**
     * @var int
     */
    public $maxPermSize;

    /**
     * @var int
     */
    public $maxHeapSize;
    protected $_name = [
        'appId'       => 'AppId',
        'groupId'     => 'GroupId',
        'options'     => 'Options',
        'minHeapSize' => 'MinHeapSize',
        'maxPermSize' => 'MaxPermSize',
        'maxHeapSize' => 'MaxHeapSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->minHeapSize) {
            $res['MinHeapSize'] = $this->minHeapSize;
        }
        if (null !== $this->maxPermSize) {
            $res['MaxPermSize'] = $this->maxPermSize;
        }
        if (null !== $this->maxHeapSize) {
            $res['MaxHeapSize'] = $this->maxHeapSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJvmConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['MinHeapSize'])) {
            $model->minHeapSize = $map['MinHeapSize'];
        }
        if (isset($map['MaxPermSize'])) {
            $model->maxPermSize = $map['MaxPermSize'];
        }
        if (isset($map['MaxHeapSize'])) {
            $model->maxHeapSize = $map['MaxHeapSize'];
        }

        return $model;
    }
}
