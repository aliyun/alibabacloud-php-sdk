<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListRankingModelVersionsRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The state of the version.
     *
     * @example TRAINING
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the model.
     *
     * @example a-a-a
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'page'       => 'page',
        'size'       => 'size',
        'status'     => 'status',
        'templateId' => 'templateId',
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
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRankingModelVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
