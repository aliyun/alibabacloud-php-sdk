<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobsResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobsResponseBody\result\content;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @var bool
     */
    public $first;

    /**
     * @var bool
     */
    public $last;

    /**
     * @var int
     */
    public $numberOfElements;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $totalElements;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'content'          => 'Content',
        'first'            => 'First',
        'last'             => 'Last',
        'numberOfElements' => 'NumberOfElements',
        'size'             => 'Size',
        'totalElements'    => 'TotalElements',
        'totalPages'       => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = [];
            if (null !== $this->content && \is_array($this->content)) {
                $n = 0;
                foreach ($this->content as $item) {
                    $res['Content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->first) {
            $res['First'] = $this->first;
        }
        if (null !== $this->last) {
            $res['Last'] = $this->last;
        }
        if (null !== $this->numberOfElements) {
            $res['NumberOfElements'] = $this->numberOfElements;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->totalElements) {
            $res['TotalElements'] = $this->totalElements;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n              = 0;
                foreach ($map['Content'] as $item) {
                    $model->content[$n++] = null !== $item ? content::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['First'])) {
            $model->first = $map['First'];
        }
        if (isset($map['Last'])) {
            $model->last = $map['Last'];
        }
        if (isset($map['NumberOfElements'])) {
            $model->numberOfElements = $map['NumberOfElements'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TotalElements'])) {
            $model->totalElements = $map['TotalElements'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
