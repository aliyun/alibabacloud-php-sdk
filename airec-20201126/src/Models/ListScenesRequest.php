<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListScenesRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'page'    => 'page',
        'sceneId' => 'sceneId',
        'size'    => 'size',
        'status'  => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
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
     * @return ListScenesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
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
