<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListViberServiceMessageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $businessAccountName;

    /**
     * @var string[]
     */
    public $destinationCountryId;

    /**
     * @var string[]
     */
    public $destinationInternationalCountryId;

    /**
     * @var string
     */
    public $industryInvolved;

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
    public $serviceId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'businessAccountName' => 'BusinessAccountName',
        'destinationCountryId' => 'DestinationCountryId',
        'destinationInternationalCountryId' => 'DestinationInternationalCountryId',
        'industryInvolved' => 'IndustryInvolved',
        'messageDestinationCountry' => 'MessageDestinationCountry',
        'messageDestinationInternationalCountry' => 'MessageDestinationInternationalCountry',
        'serviceId' => 'ServiceId',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->destinationCountryId)) {
            Model::validateArray($this->destinationCountryId);
        }
        if (\is_array($this->destinationInternationalCountryId)) {
            Model::validateArray($this->destinationInternationalCountryId);
        }
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
        if (null !== $this->businessAccountName) {
            $res['BusinessAccountName'] = $this->businessAccountName;
        }

        if (null !== $this->destinationCountryId) {
            if (\is_array($this->destinationCountryId)) {
                $res['DestinationCountryId'] = [];
                $n1 = 0;
                foreach ($this->destinationCountryId as $item1) {
                    $res['DestinationCountryId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationInternationalCountryId) {
            if (\is_array($this->destinationInternationalCountryId)) {
                $res['DestinationInternationalCountryId'] = [];
                $n1 = 0;
                foreach ($this->destinationInternationalCountryId as $item1) {
                    $res['DestinationInternationalCountryId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->industryInvolved) {
            $res['IndustryInvolved'] = $this->industryInvolved;
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

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['BusinessAccountName'])) {
            $model->businessAccountName = $map['BusinessAccountName'];
        }

        if (isset($map['DestinationCountryId'])) {
            if (!empty($map['DestinationCountryId'])) {
                $model->destinationCountryId = [];
                $n1 = 0;
                foreach ($map['DestinationCountryId'] as $item1) {
                    $model->destinationCountryId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationInternationalCountryId'])) {
            if (!empty($map['DestinationInternationalCountryId'])) {
                $model->destinationInternationalCountryId = [];
                $n1 = 0;
                foreach ($map['DestinationInternationalCountryId'] as $item1) {
                    $model->destinationInternationalCountryId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IndustryInvolved'])) {
            $model->industryInvolved = $map['IndustryInvolved'];
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

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
