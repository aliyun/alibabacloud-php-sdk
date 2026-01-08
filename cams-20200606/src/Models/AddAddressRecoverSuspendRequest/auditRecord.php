<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\AddAddressRecoverSuspendRequest;

use AlibabaCloud\Dara\Model;

class auditRecord extends Model
{
    /**
     * @var string
     */
    public $applyReason;

    /**
     * @var string[]
     */
    public $messageDestinationCountry;

    /**
     * @var string[]
     */
    public $messageDestinationInternationalCountry;

    /**
     * @var string
     */
    public $recoveryDate;

    /**
     * @var string
     */
    public $suspensionDate;
    protected $_name = [
        'applyReason' => 'ApplyReason',
        'messageDestinationCountry' => 'MessageDestinationCountry',
        'messageDestinationInternationalCountry' => 'MessageDestinationInternationalCountry',
        'recoveryDate' => 'RecoveryDate',
        'suspensionDate' => 'SuspensionDate',
    ];

    public function validate()
    {
        if (\is_array($this->messageDestinationCountry)) {
            Model::validateArray($this->messageDestinationCountry);
        }
        if (\is_array($this->messageDestinationInternationalCountry)) {
            Model::validateArray($this->messageDestinationInternationalCountry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }

        if (null !== $this->messageDestinationCountry) {
            if (\is_array($this->messageDestinationCountry)) {
                $res['MessageDestinationCountry'] = [];
                $n1 = 0;
                foreach ($this->messageDestinationCountry as $item1) {
                    $res['MessageDestinationCountry'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageDestinationInternationalCountry) {
            if (\is_array($this->messageDestinationInternationalCountry)) {
                $res['MessageDestinationInternationalCountry'] = [];
                $n1 = 0;
                foreach ($this->messageDestinationInternationalCountry as $item1) {
                    $res['MessageDestinationInternationalCountry'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recoveryDate) {
            $res['RecoveryDate'] = $this->recoveryDate;
        }

        if (null !== $this->suspensionDate) {
            $res['SuspensionDate'] = $this->suspensionDate;
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
        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
        }

        if (isset($map['MessageDestinationCountry'])) {
            if (!empty($map['MessageDestinationCountry'])) {
                $model->messageDestinationCountry = [];
                $n1 = 0;
                foreach ($map['MessageDestinationCountry'] as $item1) {
                    $model->messageDestinationCountry[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MessageDestinationInternationalCountry'])) {
            if (!empty($map['MessageDestinationInternationalCountry'])) {
                $model->messageDestinationInternationalCountry = [];
                $n1 = 0;
                foreach ($map['MessageDestinationInternationalCountry'] as $item1) {
                    $model->messageDestinationInternationalCountry[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecoveryDate'])) {
            $model->recoveryDate = $map['RecoveryDate'];
        }

        if (isset($map['SuspensionDate'])) {
            $model->suspensionDate = $map['SuspensionDate'];
        }

        return $model;
    }
}
