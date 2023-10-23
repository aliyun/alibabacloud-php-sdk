<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetCollectionPolicyRequest extends Model
{
    /**
     * @example access_log
     *
     * @var string
     */
    public $dataCode;

    /**
     * @example oss
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'dataCode'    => 'dataCode',
        'productCode' => 'productCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCode) {
            $res['dataCode'] = $this->dataCode;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCollectionPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataCode'])) {
            $model->dataCode = $map['dataCode'];
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        return $model;
    }
}
