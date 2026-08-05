<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result\meta;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result\processors;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result\sink;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result\source;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result\status;

class result extends Model
{
    /**
     * @var meta
     */
    public $meta;

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
        'meta' => 'Meta',
        'processors' => 'Processors',
        'sink' => 'Sink',
        'source' => 'Source',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->meta) {
            $this->meta->validate();
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
            $res['Meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
        }

        if (null !== $this->processors) {
            if (\is_array($this->processors)) {
                $res['Processors'] = [];
                $n1 = 0;
                foreach ($this->processors as $item1) {
                    $res['Processors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sink) {
            if (\is_array($this->sink)) {
                $res['Sink'] = [];
                $n1 = 0;
                foreach ($this->sink as $item1) {
                    $res['Sink'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            if (\is_array($this->source)) {
                $res['Source'] = [];
                $n1 = 0;
                foreach ($this->source as $item1) {
                    $res['Source'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }

        if (isset($map['Processors'])) {
            if (!empty($map['Processors'])) {
                $model->processors = [];
                $n1 = 0;
                foreach ($map['Processors'] as $item1) {
                    $model->processors[$n1] = processors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Sink'])) {
            if (!empty($map['Sink'])) {
                $model->sink = [];
                $n1 = 0;
                foreach ($map['Sink'] as $item1) {
                    $model->sink[$n1] = sink::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            if (!empty($map['Source'])) {
                $model->source = [];
                $n1 = 0;
                foreach ($map['Source'] as $item1) {
                    $model->source[$n1] = source::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
