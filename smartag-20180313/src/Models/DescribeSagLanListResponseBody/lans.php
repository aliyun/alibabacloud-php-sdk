<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagLanListResponseBody;

use AlibabaCloud\Dara\Model;

class lans extends Model
{
    /**
     * @var string
     */
    public $endIp;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $lease;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $startIp;
    protected $_name = [
        'endIp' => 'EndIp',
        'IP' => 'IP',
        'IPType' => 'IPType',
        'lease' => 'Lease',
        'mask' => 'Mask',
        'portName' => 'PortName',
        'startIp' => 'StartIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endIp) {
            $res['EndIp'] = $this->endIp;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }

        if (null !== $this->lease) {
            $res['Lease'] = $this->lease;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->startIp) {
            $res['StartIp'] = $this->startIp;
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
        if (isset($map['EndIp'])) {
            $model->endIp = $map['EndIp'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }

        if (isset($map['Lease'])) {
            $model->lease = $map['Lease'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['StartIp'])) {
            $model->startIp = $map['StartIp'];
        }

        return $model;
    }
}
