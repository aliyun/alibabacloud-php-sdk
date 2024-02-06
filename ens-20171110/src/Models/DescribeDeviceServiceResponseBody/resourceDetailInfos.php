<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDetailInfos extends Model
{
    /**
     * @description The name of the device.
     *
     * @example 5JhF100NEgdBcpNren32
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the cloud device.
     *
     * @example h-uf6009zoaexs5pefypbo
     *
     * @var string
     */
    public $ID;

    /**
     * @description The IP address.
     *
     * @example 120.27.219.219
     *
     * @var string
     */
    public $IP;

    /**
     * @description The Internet service provider (ISP).
     *
     * @example cmcc
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The ID of the image.
     *
     * @example m-2ze40oyhjorpyw61k7be
     *
     * @var string
     */
    public $imageID;

    /**
     * @description The media access control (MAC) address of the device.
     *
     * @example AA:BB:77:88:99:03
     *
     * @var string
     */
    public $mac;

    /**
     * @description The ID of the ENS node.
     *
     * @example cn-jiaozuo-2
     *
     * @var string
     */
    public $regionID;

    /**
     * @description The server name of the ENS node.
     *
     * @example ens-nc2
     *
     * @var string
     */
    public $server;

    /**
     * @description The status of the device.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the device.
     *
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
