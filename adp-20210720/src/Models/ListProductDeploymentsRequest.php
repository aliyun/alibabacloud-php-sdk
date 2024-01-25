<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListProductDeploymentsRequest extends Model
{
    /**
     * @example caf855b8-8c30-498e-96af-xxx
     *
     * @var string
     */
    public $environmentUID;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 3ae49e0d-676c-45a5-8f0e-xxx
     *
     * @var string
     */
    public $productVersionUID;
    protected $_name = [
        'environmentUID'    => 'environmentUID',
        'pageNum'           => 'pageNum',
        'pageSize'          => 'pageSize',
        'productVersionUID' => 'productVersionUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentUID) {
            $res['environmentUID'] = $this->environmentUID;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductDeploymentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentUID'])) {
            $model->environmentUID = $map['environmentUID'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }

        return $model;
    }
}
