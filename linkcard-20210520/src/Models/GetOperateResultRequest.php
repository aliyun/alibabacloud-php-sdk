<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class GetOperateResultRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $resId;

    /**
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'apiProduct' => 'ApiProduct',
        'resId'      => 'ResId',
        'serialNo'   => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->resId) {
            $res['ResId'] = $this->resId;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOperateResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ResId'])) {
            $model->resId = $map['ResId'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
