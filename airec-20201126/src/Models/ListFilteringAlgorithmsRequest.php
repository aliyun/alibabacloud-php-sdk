<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListFilteringAlgorithmsRequest extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $algorithmId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 1
     *
     * @var int
     */
    public $size;

    /**
     * @example xxx
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'algorithmId' => 'algorithmId',
        'page'        => 'page',
        'size'        => 'size',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['algorithmId'] = $this->algorithmId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFilteringAlgorithmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithmId'])) {
            $model->algorithmId = $map['algorithmId'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
