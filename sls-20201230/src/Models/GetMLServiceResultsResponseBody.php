<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetMLServiceResultsResponseBody extends Model
{
    /**
     * @var string[][]
     */
    public $data;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'data' => 'data',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    if (\is_array($item1)) {
                        $res['data'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['data'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['status'] = [];
                foreach ($this->status as $key1 => $value1) {
                    $res['status'][$key1] = $value1;
                }
            }
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    if (!empty($item1)) {
                        $model->data[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->data[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            if (!empty($map['status'])) {
                $model->status = [];
                foreach ($map['status'] as $key1 => $value1) {
                    $model->status[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
