<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetProductCertInfoRequest extends Model
{
    /**
     * @description The ID of the instance. You can view the ID of the instance on the **Overview** page in the IoT Platform console.****
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The source from which the X.509 certificate is issued.
     *
     *   **1**: The X.509 certificate is issued by IoT Platform.
     *   **3**: The X.509 certificate is issued by a third-party platform.
     *
     * @example 1
     *
     * @var int
     */
    public $issueModel;

    /**
     * @description The **ProductKey** of the product.
     *
     * @example aS2dewS****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'issueModel'    => 'IssueModel',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->issueModel) {
            $res['IssueModel'] = $this->issueModel;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetProductCertInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['IssueModel'])) {
            $model->issueModel = $map['IssueModel'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
