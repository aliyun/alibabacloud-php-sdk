<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportResponseBody\content\data\deliver;

use AlibabaCloud\Dara\Model;

class report extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var string[]
     */
    public $header;

    /**
     * @var int
     */
    public $outLine;

    /**
     * @var int
     */
    public $outSize;

    /**
     * @var string
     */
    public $shape;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'format' => 'format',
        'header' => 'header',
        'outLine' => 'outLine',
        'outSize' => 'outSize',
        'shape' => 'shape',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->header)) {
            Model::validateArray($this->header);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->header) {
            if (\is_array($this->header)) {
                $res['header'] = [];
                $n1 = 0;
                foreach ($this->header as $item1) {
                    $res['header'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outLine) {
            $res['outLine'] = $this->outLine;
        }

        if (null !== $this->outSize) {
            $res['outSize'] = $this->outSize;
        }

        if (null !== $this->shape) {
            $res['shape'] = $this->shape;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['header'])) {
            if (!empty($map['header'])) {
                $model->header = [];
                $n1 = 0;
                foreach ($map['header'] as $item1) {
                    $model->header[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['outLine'])) {
            $model->outLine = $map['outLine'];
        }

        if (isset($map['outSize'])) {
            $model->outSize = $map['outSize'];
        }

        if (isset($map['shape'])) {
            $model->shape = $map['shape'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
