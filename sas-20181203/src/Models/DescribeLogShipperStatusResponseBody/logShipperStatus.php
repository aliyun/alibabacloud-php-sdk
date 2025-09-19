<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogShipperStatusResponseBody;

use AlibabaCloud\Dara\Model;

class logShipperStatus extends Model
{
    /**
     * @var string
     */
    public $authStatus;

    /**
     * @var string
     */
    public $buyStatus;

    /**
     * @var string
     */
    public $etlMetaVersion;

    /**
     * @var string
     */
    public $openStatus;

    /**
     * @var string
     */
    public $postPaidOpenStatus;

    /**
     * @var string
     */
    public $postPaidSupportStatus;

    /**
     * @var string
     */
    public $slsProjectStatus;

    /**
     * @var string
     */
    public $slsServiceStatus;
    protected $_name = [
        'authStatus' => 'AuthStatus',
        'buyStatus' => 'BuyStatus',
        'etlMetaVersion' => 'EtlMetaVersion',
        'openStatus' => 'OpenStatus',
        'postPaidOpenStatus' => 'PostPaidOpenStatus',
        'postPaidSupportStatus' => 'PostPaidSupportStatus',
        'slsProjectStatus' => 'SlsProjectStatus',
        'slsServiceStatus' => 'SlsServiceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }

        if (null !== $this->buyStatus) {
            $res['BuyStatus'] = $this->buyStatus;
        }

        if (null !== $this->etlMetaVersion) {
            $res['EtlMetaVersion'] = $this->etlMetaVersion;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }

        if (isset($map['BuyStatus'])) {
            $model->buyStatus = $map['BuyStatus'];
        }

        if (isset($map['EtlMetaVersion'])) {
            $model->etlMetaVersion = $map['EtlMetaVersion'];
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
