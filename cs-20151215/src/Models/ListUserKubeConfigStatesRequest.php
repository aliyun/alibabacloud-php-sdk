<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ListUserKubeConfigStatesRequest extends Model
{
    /**
     * @description The page number.
     *
     *   Valid values: ≥ 1.
     *   Default value: 1.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     *   Value values: 1 to 100.
     *   Default value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'pageNumber' => 'page_number',
        'pageSize' => 'page_size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserKubeConfigStatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        return $model;
    }
}
