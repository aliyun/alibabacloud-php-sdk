<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDdosServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $changingAffectTime;

    /**
     * @var string
     */
    public $changingChargeType;

    /**
     * @var int
     */
    public $changingDomianNum;

    /**
     * @var string
     */
    public $changingEdition;

    /**
     * @var int
     */
    public $changingProtectNum;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $domianNum;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var string
     */
    public $endingTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $openingTime;

    /**
     * @var int
     */
    public $protectNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'changingAffectTime' => 'ChangingAffectTime',
        'changingChargeType' => 'ChangingChargeType',
        'changingDomianNum'  => 'ChangingDomianNum',
        'changingEdition'    => 'ChangingEdition',
        'changingProtectNum' => 'ChangingProtectNum',
        'chargeType'         => 'ChargeType',
        'domianNum'          => 'DomianNum',
        'edition'            => 'Edition',
        'enabled'            => 'Enabled',
        'endingTime'         => 'EndingTime',
        'instanceId'         => 'InstanceId',
        'openingTime'        => 'OpeningTime',
        'protectNum'         => 'ProtectNum',
        'requestId'          => 'RequestId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changingAffectTime) {
            $res['ChangingAffectTime'] = $this->changingAffectTime;
        }
        if (null !== $this->changingChargeType) {
            $res['ChangingChargeType'] = $this->changingChargeType;
        }
        if (null !== $this->changingDomianNum) {
            $res['ChangingDomianNum'] = $this->changingDomianNum;
        }
        if (null !== $this->changingEdition) {
            $res['ChangingEdition'] = $this->changingEdition;
        }
        if (null !== $this->changingProtectNum) {
            $res['ChangingProtectNum'] = $this->changingProtectNum;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->domianNum) {
            $res['DomianNum'] = $this->domianNum;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->endingTime) {
            $res['EndingTime'] = $this->endingTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }
        if (null !== $this->protectNum) {
            $res['ProtectNum'] = $this->protectNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDdosServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangingAffectTime'])) {
            $model->changingAffectTime = $map['ChangingAffectTime'];
        }
        if (isset($map['ChangingChargeType'])) {
            $model->changingChargeType = $map['ChangingChargeType'];
        }
        if (isset($map['ChangingDomianNum'])) {
            $model->changingDomianNum = $map['ChangingDomianNum'];
        }
        if (isset($map['ChangingEdition'])) {
            $model->changingEdition = $map['ChangingEdition'];
        }
        if (isset($map['ChangingProtectNum'])) {
            $model->changingProtectNum = $map['ChangingProtectNum'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DomianNum'])) {
            $model->domianNum = $map['DomianNum'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['EndingTime'])) {
            $model->endingTime = $map['EndingTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }
        if (isset($map['ProtectNum'])) {
            $model->protectNum = $map['ProtectNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
