<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class Proceeding extends Model
{
    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var Proceeding
     */
    public $subTasks;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'detail' => 'detail',
        'progress' => 'progress',
        'status' => 'status',
        'subTasks' => 'subTasks',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        if (null !== $this->subTasks) {
            $this->subTasks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['detail'] = [];
                foreach ($this->detail as $key1 => $value1) {
                    $res['detail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subTasks) {
            $res['subTasks'] = null !== $this->subTasks ? $this->subTasks->toArray($noStream) : $this->subTasks;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['detail'])) {
            if (!empty($map['detail'])) {
                $model->detail = [];
                foreach ($map['detail'] as $key1 => $value1) {
                    $model->detail[$key1] = $value1;
                }
            }
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subTasks'])) {
            $model->subTasks = self::fromMap($map['subTasks']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
