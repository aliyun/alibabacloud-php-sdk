<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

class ListDocsGroupByYearRequest extends Model
{
    /**
     * @var string[]
     */
    public $applyCodes;

    /**
     * @var string
     */
    public $fileNameKeyword;

    /**
     * @var int[]
     */
    public $orderIds;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'applyCodes'      => 'applyCodes',
        'fileNameKeyword' => 'fileNameKeyword',
        'orderIds'        => 'orderIds',
        'productCode'     => 'productCode',
        'scene'           => 'scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyCodes) {
            $res['applyCodes'] = $this->applyCodes;
        }
        if (null !== $this->fileNameKeyword) {
            $res['fileNameKeyword'] = $this->fileNameKeyword;
        }
        if (null !== $this->orderIds) {
            $res['orderIds'] = $this->orderIds;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDocsGroupByYearRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyCodes'])) {
            if (!empty($map['applyCodes'])) {
                $model->applyCodes = $map['applyCodes'];
            }
        }
        if (isset($map['fileNameKeyword'])) {
            $model->fileNameKeyword = $map['fileNameKeyword'];
        }
        if (isset($map['orderIds'])) {
            if (!empty($map['orderIds'])) {
                $model->orderIds = $map['orderIds'];
            }
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        return $model;
    }
}
