<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponseBody\result\meta;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponseBody\result\processors;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponseBody\result\sink;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponseBody\result\source;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\StartOfflineTaskResponseBody\result\status;

class result extends Model
{
    /**
     * @var meta
     */
    public $meta;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var processors[]
     */
    public $processors;

    /**
     * @var sink[]
     */
    public $sink;

    /**
     * @var source[]
     */
    public $source;

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'meta' => 'meta',
        'parameters' => 'parameters',
        'processors' => 'processors',
        'sink' => 'sink',
        'source' => 'source',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->processors)) {
            Model::validateArray($this->processors);
        }
        if (\is_array($this->sink)) {
            Model::validateArray($this->sink);
        }
        if (\is_array($this->source)) {
            Model::validateArray($this->source);
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->processors) {
            if (\is_array($this->processors)) {
                $res['processors'] = [];
                $n1 = 0;
                foreach ($this->processors as $item1) {
                    $res['processors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sink) {
            if (\is_array($this->sink)) {
                $res['sink'] = [];
                $n1 = 0;
                foreach ($this->sink as $item1) {
                    $res['sink'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            if (\is_array($this->source)) {
                $res['source'] = [];
                $n1 = 0;
                foreach ($this->source as $item1) {
                    $res['source'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['processors'])) {
            if (!empty($map['processors'])) {
                $model->processors = [];
                $n1 = 0;
                foreach ($map['processors'] as $item1) {
                    $model->processors[$n1] = processors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sink'])) {
            if (!empty($map['sink'])) {
                $model->sink = [];
                $n1 = 0;
                foreach ($map['sink'] as $item1) {
                    $model->sink[$n1] = sink::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['source'])) {
            if (!empty($map['source'])) {
                $model->source = [];
                $n1 = 0;
                foreach ($map['source'] as $item1) {
                    $model->source[$n1] = source::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = status::fromMap($map['status']);
        }

        return $model;
    }
}
