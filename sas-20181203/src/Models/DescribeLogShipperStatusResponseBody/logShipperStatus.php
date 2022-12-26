<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogShipperStatusResponseBody;

use AlibabaCloud\Tea\Model;

class logShipperStatus extends Model
{
    /**
     * @example yes
     *
     * @var string
     */
    public $authStatus;

    /**
     * @example yes
     *
     * @var string
     */
    public $buyStatus;

    /**
     * @example yes
     *
     * @var string
     */
    public $openStatus;

    /**
     * @example no
     *
     * @var string
     */
    public $postPaidOpenStatus;

    /**
     * @example yes
     *
     * @var string
     */
    public $postPaidSupportStatus;

    /**
     * @example Normal
     *
     * @var string
     */
    public $slsProjectStatus;

    /**
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
