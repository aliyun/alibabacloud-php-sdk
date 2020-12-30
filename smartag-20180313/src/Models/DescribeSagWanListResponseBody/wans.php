<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListResponseBody;

use AlibabaCloud\Tea\Model;

class wans extends Model
{
    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $gateway;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var string
     */
    public $trafficState;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'weight'       => 'Weight',
        'mask'         => 'Mask',
        'gateway'      => 'Gateway',
        'portName'     => 'PortName',
        'IPType'       => 'IPType',
        'priority'     => 'Priority',
        'bandWidth'    => 'BandWidth',
        'trafficState' => 'TrafficState',
        'IP'           => 'IP',
        'ISP'          => 'ISP',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->trafficState) {
            $res['TrafficState'] = $this->trafficState;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['TrafficState'])) {
            $model->trafficState = $map['TrafficState'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
