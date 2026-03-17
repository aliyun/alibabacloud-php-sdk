<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagWanListResponseBody;

use AlibabaCloud\Dara\Model;

class wans extends Model
{
    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var string
     */
    public $gateway;

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
    public $ISP;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $portName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $trafficState;

    /**
     * @var string
     */
    public $username;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'bandWidth' => 'BandWidth',
        'gateway' => 'Gateway',
        'IP' => 'IP',
        'IPType' => 'IPType',
        'ISP' => 'ISP',
        'mask' => 'Mask',
        'portName' => 'PortName',
        'priority' => 'Priority',
        'trafficState' => 'TrafficState',
        'username' => 'Username',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }

        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }

        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->trafficState) {
            $res['TrafficState'] = $this->trafficState;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }

        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }

        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['TrafficState'])) {
            $model->trafficState = $map['TrafficState'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
