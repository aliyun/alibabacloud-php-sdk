<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagLanListResponseBody;

use AlibabaCloud\Tea\Model;

class lans extends Model
{
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
    public $endIp;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $startIp;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $IP;
    protected $_name = [
        'lease'    => 'Lease',
        'mask'     => 'Mask',
        'endIp'    => 'EndIp',
        'portName' => 'PortName',
        'startIp'  => 'StartIp',
        'IPType'   => 'IPType',
        'IP'       => 'IP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lease) {
            $res['Lease'] = $this->lease;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->endIp) {
            $res['EndIp'] = $this->endIp;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->startIp) {
            $res['StartIp'] = $this->startIp;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lease'])) {
            $model->lease = $map['Lease'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['EndIp'])) {
            $model->endIp = $map['EndIp'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['StartIp'])) {
            $model->startIp = $map['StartIp'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        return $model;
    }
}
