<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsV2ResponseBody\meta;

class GetLogsV2ResponseBody extends Model
{
    /**
     * @var string[][]
     */
    public $data;

    /**
     * @var meta
     */
    public $meta;
    protected $_name = [
        'data' => 'data',
        'meta' => 'meta',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->meta) {
            $this->meta->validate();
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
                        $res['data'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['data'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
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
                        $model->data[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->data[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        return $model;
    }
}
