<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceResponseBody;

use AlibabaCloud\Tea\Model;

class resourceDetailInfos extends Model
{
    /**
     * @description The ID of the device.
     *
     * @example h-uf6009zoa6hdbjyqxcn1
     *
     * @var string
     */
    public $ID;

    /**
     * @description The IP address of the device.
     *
     * @example 10.152.196.36
     *
     * @var string
     */
    public $IP;

    /**
     * @description The Internet service provider (ISP) to which the device belongs.
     *
     * @example telecom
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The media access control (MAC) address of the device.
     *
     * @example 24:0B:88:04:71:E0
     *
     * @var string
     */
    public $mac;

    /**
     * @description The ID of the edge node to which the device belongs.
     *
     * @example cn-chongqing-1
     *
     * @var string
     */
    public $regionID;

    /**
     * @description The name of the server on which the device is deployed.
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
     * @description The type of the instance.
     *
     * @example ens.ac6.large
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ID'       => 'ID',
        'IP'       => 'IP',
        'ISP'      => 'ISP',
        'mac'      => 'Mac',
        'regionID' => 'RegionID',
        'server'   => 'Server',
        'status'   => 'Status',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
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
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
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
