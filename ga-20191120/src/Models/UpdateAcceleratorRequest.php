<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateAcceleratorRequest extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **false**: disables automatic payment. This is the default value. After an order is generated, you must go to the [Order Center](https://usercenter2-intl.aliyun.com/order/list) to complete the payment.
     *   **true**: enables automatic payment. Payments are automatically completed.
     *
     * >  This parameter takes effect only if you call the operation to upgrade a GA instance.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to automatically pay bills by using coupons. Default value: false. Valid values:
     *
     *   **true**: automatically pays bills by using coupons.
     *   **false**: does not automatically pay bills by using coupons.
     *
     * >  This parameter takes effect only if the **AutoPay** parameter is set to **true**.
     * @example false
     *
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the GA instance. The description can be up to 200 characters in length.
     *
     * @example Accelerator
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the GA instance.
     *
     * The name must be 1 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example Accelerator
     *
     * @var string
     */
    public $name;

    /**
     * @description The region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The specification of the GA instance. Valid values:
     *
     *   **1**: Small Ⅰ
     *   **2**: Small Ⅱ
     *   **3**: Small Ⅲ
     *   **5**: Medium Ⅰ
     *   **8**: Medium Ⅱ
     *   **10**: Medium Ⅲ
     *   **20**: Large Ⅰ
     *   **30**: Large Ⅱ
     *   **40**: Large Ⅲ
     *   **50**: Large Ⅳ
     *   **60**: Large Ⅴ
     *   **70**: Large Ⅵ
     *   **80**: Large VⅡ
     *   **90**: Large VⅢ
     *   **100**: Super Large Ⅰ
     *   **200**: Super Large Ⅱ
     *
     * Different specifications provide different capabilities. For more information, see [Instance specifications](~~153127~~).
     * @example 1
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'autoPay'       => 'AutoPay',
        'autoUseCoupon' => 'AutoUseCoupon',
        'clientToken'   => 'ClientToken',
        'description'   => 'Description',
        'name'          => 'Name',
        'regionId'      => 'RegionId',
        'spec'          => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAcceleratorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
