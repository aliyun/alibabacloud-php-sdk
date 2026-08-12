<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\PreviewDataPipelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\PreviewDataPipelineResponseBody\datasets\meta;

class datasets extends Model
{
    /**
     * @var mixed[][]
     */
    public $data;

    /**
     * @var meta[]
     */
    public $meta;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sampleCount;
    protected $_name = [
        'data' => 'data',
        'meta' => 'meta',
        'name' => 'name',
        'sampleCount' => 'sampleCount',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
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

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['meta'] = [];
                $n1 = 0;
                foreach ($this->meta as $item1) {
                    $res['meta'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sampleCount) {
            $res['sampleCount'] = $this->sampleCount;
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

        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                $n1 = 0;
                foreach ($map['meta'] as $item1) {
                    $model->meta[$n1] = meta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sampleCount'])) {
            $model->sampleCount = $map['sampleCount'];
        }

        return $model;
    }
}
