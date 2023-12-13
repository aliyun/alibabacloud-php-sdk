<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaRequest extends Model
{
    /**
     * @example this is a test quota
     *
     * @var string
     */
    public $description;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string
     */
    public $queueStrategy;
    protected $_name = [
        'description'   => 'Description',
        'labels'        => 'Labels',
        'queueStrategy' => 'QueueStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QueueStrategy'])) {
            $model->queueStrategy = $map['QueueStrategy'];
        }

        return $model;
    }
}
