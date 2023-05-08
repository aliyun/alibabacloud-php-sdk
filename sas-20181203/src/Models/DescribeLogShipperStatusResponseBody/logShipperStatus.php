<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogShipperStatusResponseBody;

use AlibabaCloud\Tea\Model;

class logShipperStatus extends Model
{
    /**
     * @description Indicates whether Security Center is authorized to access Log Service. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example yes
     *
     * @var string
     */
    public $authStatus;

    /**
     * @description Indicates whether the log analysis feature is purchased. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example yes
     *
     * @var string
     */
    public $buyStatus;

    /**
     * @description The status of the log analysis feature. Valid values:
     *
     *   **yes**: enabled
     *   **no**: disabled
     *
     * @example yes
     *
     * @var string
     */
    public $openStatus;

    /**
     * @description Indicates whether the pay-as-you-go billing method is used. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $postPaidOpenStatus;

    /**
     * @description Indicates whether the log analysis feature supports the pay-as-you-go billing method. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example yes
     *
     * @var string
     */
    public $postPaidSupportStatus;

    /**
     * @description The status of the dedicated Log Service project. Valid values:
     *
     *   **Normal**: normal
     *   **Disable**: disabled
     *
     * @example Normal
     *
     * @var string
     */
    public $slsProjectStatus;

    /**
     * @description Indicates whether Log Service is activated. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example yes
     *
     * @var string
     */
    public $slsServiceStatus;
    protected $_name = [
        'authStatus'            => 'AuthStatus',
        'buyStatus'             => 'BuyStatus',
        'openStatus'            => 'OpenStatus',
        'postPaidOpenStatus'    => 'PostPaidOpenStatus',
        'postPaidSupportStatus' => 'PostPaidSupportStatus',
        'slsProjectStatus'      => 'SlsProjectStatus',
        'slsServiceStatus'      => 'SlsServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }
        if (null !== $this->buyStatus) {
            $res['BuyStatus'] = $this->buyStatus;
        }
        if (null !== $this->openStatus) {
            $res['OpenStatus'] = $this->openStatus;
        }
        if (null !== $this->postPaidOpenStatus) {
            $res['PostPaidOpenStatus'] = $this->postPaidOpenStatus;
        }
        if (null !== $this->postPaidSupportStatus) {
            $res['PostPaidSupportStatus'] = $this->postPaidSupportStatus;
        }
        if (null !== $this->slsProjectStatus) {
            $res['SlsProjectStatus'] = $this->slsProjectStatus;
        }
        if (null !== $this->slsServiceStatus) {
            $res['SlsServiceStatus'] = $this->slsServiceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logShipperStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }
        if (isset($map['BuyStatus'])) {
            $model->buyStatus = $map['BuyStatus'];
        }
        if (isset($map['OpenStatus'])) {
            $model->openStatus = $map['OpenStatus'];
        }
        if (isset($map['PostPaidOpenStatus'])) {
            $model->postPaidOpenStatus = $map['PostPaidOpenStatus'];
        }
        if (isset($map['PostPaidSupportStatus'])) {
            $model->postPaidSupportStatus = $map['PostPaidSupportStatus'];
        }
        if (isset($map['SlsProjectStatus'])) {
            $model->slsProjectStatus = $map['SlsProjectStatus'];
        }
        if (isset($map['SlsServiceStatus'])) {
            $model->slsServiceStatus = $map['SlsServiceStatus'];
        }

        return $model;
    }
}
