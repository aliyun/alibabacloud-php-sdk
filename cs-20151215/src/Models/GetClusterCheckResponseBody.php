<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class GetClusterCheckResponseBody extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var mixed[][][]
     */
    public $checkItems;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId' => 'check_id',
        'checkItems' => 'check_items',
        'createdAt' => 'created_at',
        'finishedAt' => 'finished_at',
        'message' => 'message',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->checkItems)) {
            Model::validateArray($this->checkItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['check_id'] = $this->checkId;
        }

        if (null !== $this->checkItems) {
            if (\is_array($this->checkItems)) {
                $res['check_items'] = [];
                foreach ($this->checkItems as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['check_items'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            if (\is_array($item2)) {
                                $res['check_items'][$key1][$n2] = [];
                                foreach ($item2 as $key3 => $value3) {
                                    $res['check_items'][$key1][$n2][$key3] = $value3;
                                }
                            }
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }

        if (null !== $this->finishedAt) {
            $res['finished_at'] = $this->finishedAt;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['check_id'])) {
            $model->checkId = $map['check_id'];
        }

        if (isset($map['check_items'])) {
            if (!empty($map['check_items'])) {
                $model->checkItems = [];
                foreach ($map['check_items'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->checkItems[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            if (!empty($item2)) {
                                $model->checkItems[$key1][$n2] = [];
                                foreach ($item2 as $key3 => $value3) {
                                    $model->checkItems[$key1][$n2][$key3] = $value3;
                                }
                            }
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }

        if (isset($map['finished_at'])) {
            $model->finishedAt = $map['finished_at'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
