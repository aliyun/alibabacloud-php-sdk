<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GetFootprintListRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $productType;
    protected $_name = [
        'code' => 'code',
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'productType' => 'productType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }

        return $model;
    }
}
