<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListPageResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetServiceListPageResponseBody\data\content;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The data array that is returned.
     *
     * @var content[]
     */
    public $content;

    /**
     * @description The number of entries returned per page.
     *
     * @example 8
     *
     * @var int
     */
    public $size;

    /**
     * @description The total number of returned entries.
     *
     * @example 6
     *
     * @var int
     */
    public $totalElements;

    /**
     * @description The total number of returned pages.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'content'       => 'Content',
        'size'          => 'Size',
        'totalElements' => 'TotalElements',
        'totalPages'    => 'TotalPages',
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
     * @return data
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
