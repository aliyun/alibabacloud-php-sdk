<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListExtensionsResponseBody\pagingInfo\extensions;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var extensions[]
     */
    public $extensions;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'extensions' => 'Extensions',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['Extensions'] = [];
            if (null !== $this->extensions && \is_array($this->extensions)) {
                $n = 0;
                foreach ($this->extensions as $item) {
                    $res['Extensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extensions'])) {
            if (!empty($map['Extensions'])) {
                $model->extensions = [];
                $n                 = 0;
                foreach ($map['Extensions'] as $item) {
                    $model->extensions[$n++] = null !== $item ? extensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
