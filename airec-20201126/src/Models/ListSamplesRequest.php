<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListSamplesRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example Sample1
     *
     * @var string
     */
    public $sampleId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'page'     => 'page',
        'sampleId' => 'sampleId',
        'size'     => 'size',
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
        if (null !== $this->sampleId) {
            $res['sampleId'] = $this->sampleId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSamplesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['sampleId'])) {
            $model->sampleId = $map['sampleId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
