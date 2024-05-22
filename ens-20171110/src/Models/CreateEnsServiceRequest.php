<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEnsServiceRequest extends Model
{
    /**
     * @description The ID of the resource that you want to obtain. You can specify only one ID in a request.
     *
     * This parameter is required.
     * @example ens-20190806****
     *
     * @var string
     */
    public $ensServiceId;

    /**
     * @description The operation to perform after you preview the created edge service. Valid values:
     *
     *   **Buy**: create
     *   **Upgrade**: change
     *
     * This parameter is required.
     * @example Buy
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'ensServiceId' => 'EnsServiceId',
        'orderType'    => 'OrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensServiceId) {
            $res['EnsServiceId'] = $this->ensServiceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnsServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsServiceId'])) {
            $model->ensServiceId = $map['EnsServiceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
