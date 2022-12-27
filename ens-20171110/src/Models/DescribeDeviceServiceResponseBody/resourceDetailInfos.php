<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDetailInfos extends Model
{
    /**
     * @example 5JhF100NEgdBcpNren32
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example h-uf6009zoaexs5pefypbo
     *
     * @var string
     */
    public $ID;

    /**
     * @example 120.27.219.219
     *
     * @var string
     */
    public $IP;

    /**
     * @example cmcc
     *
     * @var string
     */
    public $ISP;

    /**
     * @example m-2ze40oyhjorpyw61k7be
     *
     * @var string
     */
    public $imageID;

    /**
     * @example AA:BB:77:88:99:03
     *
     * @var string
     */
    public $mac;

    /**
     * @example cn-jiaozuo-2
     *
     * @var string
     */
    public $regionID;

    /**
     * @example ens-nc2
     *
     * @var string
     */
    public $server;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example ens.ac6.large
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'ID'         => 'ID',
        'IP'         => 'IP',
        'ISP'        => 'ISP',
        'imageID'    => 'ImageID',
        'mac'        => 'Mac',
        'regionID'   => 'RegionID',
        'server'     => 'Server',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->imageID) {
            $res['ImageID'] = $this->imageID;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDetailInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['ImageID'])) {
            $model->imageID = $map['ImageID'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
